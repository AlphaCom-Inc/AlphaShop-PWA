<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>/filter/attribute-group">Группы фильтров</a></li>
                    <li class="breadcrumb-item"><?=h($group->title);?></li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="<?=ADMIN;?>/filter/attribute-group" class="float-sm-right btn btn-sm btn-danger"><i class="ai ai-close"></i> Отменить</a>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="<?=ADMIN;?>/filter/group-edit" method="post" data-toggle="validator">
                    <div class="card-body">
                        <div class="form-group has-feedback">
                            <label for="title">Наименование группы</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Наименование группы" required value="<?=h($group->title);?>">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="id" value="<?=$group->id;?>">
                        <button type="submit" class="btn btn-primary"><i class="ai ai-save-outline"></i> Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->