<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item">Группы фильтров</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="<?=ADMIN;?>/filter/group-add" class="float-sm-right btn btn-sm btn-primary"><i class="ai ai-add"></i>&nbsp; Добавить атрибут</a>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr class="text-center">
                            <th><i class="ai ai-text-outline"></i>&nbsp; Наименование</th>
                            <th><i class="ai ai-options-outline"></i>&nbsp; Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($attrs_group as $item): ?>
                        <tr>
                            <td><?=$item->title;?></td>
                            <td class="text-center">
                                <a href="<?=ADMIN;?>/filter/group-edit?id=<?=$item->id;?>"><i class="ai ai-pencil"></i></a>
                                &nbsp;
                                <a class="delete text-danger" href="<?=ADMIN;?>/filter/group-delete?id=<?=$item->id;?>"><i class="ai ai-close text-danger"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->