<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>/filter/attribute">Список фильтров</a></li>
                    <li class="breadcrumb-item"><?=h($attr->value);?></li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="<?=ADMIN;?>/filter/attribute" class="float-sm-right btn btn-sm btn-danger"><i class="ai ai-close"></i> Отменить</a>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="<?=ADMIN;?>/filter/attribute-edit" method="post" data-toggle="validator">
                    <div class="card-body">
                        <div class="form-group has-feedback">
                            <label for="value">Наименование</label>
                            <input type="text" name="value" class="form-control" id="value" placeholder="Наименование" required value="<?=h($attr->value);?>">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Группа</label>
                            <select name="attr_group_id" id="category_id" class="form-control">
                                <?php foreach($attrs_group as $item): ?>
                                    <option value="<?=$item->id;?>"<?php if($item->id == $attr->attr_group_id) echo ' selected'; ?>><?=$item->title;?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="id" value="<?=$attr->id;?>">
                        <button type="submit" class="btn btn-primary"><i class="ai ai-save-outline"></i> Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->