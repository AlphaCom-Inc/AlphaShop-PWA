<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>/blog">Блог посты</a></li>
                    <li class="breadcrumb-item"><?=$post->title;?></li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="<?=ADMIN;?>/blog" class="float-sm-right btn btn-sm btn-danger"><i class="ai ai-close"></i> Отменить</a>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="<?=ADMIN;?>/blog/edit" method="post" data-toggle="validator">
                    <div class="card-header p-0"></div>
                    <div class="card-body row">
                        <div class="col-sm-2 align-items-center ml-3 mr-5">
                            <b>Картинка</b>
                            <br><br>
                            <div class="card file-upload">
                                <div class="card-body p-0">
                                    <div id="single" data-url="blog/blog-img" data-name="blogImg" data-type="blog" data-class="brand-image settings-favicon" class="blogImg">
                                        <img src="/images/blog/<?=$post->img;?>" alt="Blog IMG" class="brand-image blog-image">
                                    </div>
                                    <div class="single"></div>
                                </div>
                                <div class="overlay" style="display: none;">
                                    <i class="ai ai-sync fa-3x fa-spin"></i>
                                </div>
                            </div>
                            <p>Рекомендуемый размер: 512x512</p>
                            <br>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="status" id="status" <?=$post->status ? 'checked' : null;?>>
                                <label for="status" class="custom-control-label">Статус</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group has-feedback">
                                <label for="title">Наименование</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Наименование товара" value="<?=h($post->title);?>" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>

                            <div class="form-group">
                                <label for="keywords">Ключевые слова</label>
                                <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова" value="<?=h($post->keywords);?>">
                            </div>

                            <div class="form-group">
                                <label for="description">Описание</label>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Описание" value="<?=h($post->description);?>">
                            </div>

                            <div class="tab-pane" id="product_date">
                                <div class="form-group has-feedback">
                                    <label for="content">Контент</label>
                                    <textarea name="content" id="container" cols="80" rows="10"><?=$post->content;?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="author" value="<?=$post->author;?>">
                        <input type="hidden" name="id" value="<?=$post->id;?>">
                        <button type="submit" class="btn btn-primary"><i class="ai ai-save-outline"></i> Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->