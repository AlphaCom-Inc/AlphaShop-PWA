<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>/product">Список товаров</a></li>
                    <li class="breadcrumb-item"><?=$product->title;?></li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="<?=ADMIN;?>/product" class="float-sm-right btn btn-sm btn-danger"><i class="ai ai-close"></i> Отменить</a>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="<?=ADMIN;?>/product/edit" method="post" data-toggle="validator" id="add">
                    <div class="card-header p-0">
                        <ul class="nav nav-pills ml-auto p-2">
                            <li class="nav-item"><a class="nav-link active" href="#product_general" data-toggle="tab">Основные</a></li>
                            <li class="nav-item"><a class="nav-link" href="#product_date" data-toggle="tab">Контент</a></li>
                            <li class="nav-item"><a class="nav-link" href="#product_connect" data-toggle="tab">Связы</a></li>
                            <li class="nav-item"><a class="nav-link" href="#product_images" data-toggle="tab">Галерея</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="product_general">
                                <div class="row">
                                    <div class="col-md-2 ml-3 mr-5">
                                        <h3 class="card-title text-bold">Базовое изображение</h3>
                                        <br>
                                        <div class="card mt-2 file-upload">
                                            <div class="card-body p-0">
                                                <div id="single" class="single" data-url="product/add-image" data-type="product" data-style="width: auto; height: 258px" data-name="single">
                                                    <img src="/images/product/<?=$product->img;?>" style="width: auto; height: 258px">
                                                </div>
                                            </div>
                                            <div class="overlay" style="display: none;">
                                                <i class="ai ai-sync fa-3x fa-spin"></i>
                                            </div>
                                        </div>
                                        <p><small>Рекомендуемые размеры: <?=$recSingle;?></small></p>

                                        <div class="custom-control custom-switch">
                                            <input class="custom-control-input" type="checkbox" name="status" id="status" <?=$product->status ? 'checked' : null;?>>
                                            <label for="status" class="custom-control-label">Статус</label>
                                        </div>

                                        <div class="custom-control custom-switch mt-2">
                                            <input class="custom-control-input" type="checkbox" name="hit" id="hit" <?=$product->hit ? 'checked' : null;?>>
                                            <label for="hit" class="custom-control-label">Хит</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group has-feedback">
                                            <label for="title">Наименование товара</label>
                                            <input type="text" name="title" class="form-control" id="title" placeholder="Наименование товара" value="<?=h($product->title);?>" required>
                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                        </div>

                                        <div class="form-group">
                                            <label for="category_id">Родительская категория</label>
                                            <?php new \app\widgets\menu\Menu([
                                                'tpl' => WWW . '/menu/select.php',
                                                'container' => 'select',
                                                'cache' => 0,
                                                'cacheKey' => 'admin_select',
                                                'class' => 'form-control',
                                                'attrs' => [
                                                    'name' => 'category_id',
                                                    'id' => 'category_id',
                                                ],
                                            ]) ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="keywords">Ключевые слова</label>
                                            <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова" value="<?=h($product->keywords);?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Описание</label>
                                            <input type="text" name="description" class="form-control" id="description" placeholder="Описание" value="<?=h($product->description);?>">
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label for="price">Цена</label>
                                            <input type="text" name="price" class="form-control" id="description" placeholder="Цена" pattern="^[0-9.]{1,}$" value="<?=$product->price;?>" required data-error="Допускаются цифры и десятичная точка">
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label for="old_price">Старая цена</label>
                                            <input type="text" name="old_price" class="form-control" id="description" placeholder="Старая цена" pattern="^[0-9.]{1,}$" value="<?=$product->old_price;?>" data-error="Допускаются цифры и десятичная точка">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="product_date">
                                <div class="form-group has-feedback">
                                    <label for="content">Контент</label>
                                    <textarea name="content" id="container" cols="80" rows="10"><?=$product->content;?></textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="product_connect">
                                <div class="form-group">
                                    <label for="related">Связанные товары</label>
                                    <select name="related[]" class="form-control select2" id="related" multiple>
                                        <?php if(!empty($related_product)): ?>
                                            <?php foreach($related_product as $item): ?>
                                                <option value="<?=$item['related_id'];?>" selected><?=$item['title'];?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </select>
                                </div>

                                <?php new \app\widgets\filter\Filter($filter, WWW . '/filter/admin_filter_tpl.php'); ?>
                            </div>
                            <div class="tab-pane" id="product_images">
                                <div class="form-group row">
                                    <div class="col-auto">
                                        <h3 class="card-title text-bold">Рекомендуемые размеры: <?=$recMulti;?></h3>
                                        <br>
                                        <div class="card mt-2 file-upload">
                                            <div class="card-body multi row">
                                                <div id="multi" class="col-sm bg-light btn d-flex align-items-center justify-content-center hover" data-url="product/add-image" data-name="multi" style="max-width: 200px;width: 200px;min-width: 200px;height: 255px;">
                                                    <i class="ai ai-add" style="font-size: 45px;"></i>
                                                </div>
                                                <?php if(!empty($gallery)): ?>
                                                    <?php foreach($gallery as $item): ?>
                                                        <div class="col-lg ml-2" style="height: 255px;">
                                                            <img src="/images/product/<?=$item;?>" alt="" style="height: 255px; border-radius: 8px;" data-id="<?=$product->id;?>" data-src="<?=$item;?>" class="del-item">
                                                        </div>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="overlay" style="display: none;">
                                                <i class="ai ai-sync fa-3x fa-spin"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="id" value="<?=$product->id;?>">
                        <button type="submit" class="btn btn-primary"><i class="ai ai-save-outline"></i> Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->