<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>/filter/attribute">Список фильтров</a></li>
                    <li class="breadcrumb-item">Новый фильтр</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="<?=ADMIN;?>/filter/attribute" class="float-sm-right btn btn-sm btn-danger"><i class="ai ai-close"></i> Отменить</a>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="<?=ADMIN;?>/filter/attribute-add" method="post" data-toggle="validator" id="add">
                    <div class="card-body">
                        <div class="form-group has-feedback">
                            <label for="value">Наименование</label>
                            <input type="text" name="value" class="form-control" id="value" placeholder="Наименование" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Группа</label>
                            <select name="attr_group_id" id="category_id" class="form-control">
                                <option>Выберите группу</option>
                                <?php foreach($group as $item): ?>
                                    <option value="<?=$item->id;?>"><?=$item->title;?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><i class="ai ai-add"></i> Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->