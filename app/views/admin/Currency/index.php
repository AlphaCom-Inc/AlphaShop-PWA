<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item">Список валют</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="<?=ADMIN;?>/currency/add" class="float-sm-right btn btn-sm btn-primary"><i class="ai ai-add"></i>&nbsp; Добавить пользователь</a>
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
                            <th>ID</th>
                            <th><i class="ai ai-text-outline"></i>&nbsp; Наименование</th>
                            <th><i class="ai ai-wallet-outline"></i>&nbsp; Код</th>
                            <th><i class="ai ai-trending-up-outline"></i>&nbsp; Значение</th>
                            <th><i class="ai ai-options-outline"></i>&nbsp; Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($currencies as $currency): ?>
                            <tr class="text-center">
                                <td><?=$currency->id;?></td>
                                <td><?=$currency->title;?></td>
                                <td><?=$currency->code;?></td>
                                <td><?=$currency->value;?></td>
                                <td>
                                    <a href="<?=ADMIN;?>/currency/edit?id=<?=$currency->id;?>"><i class="ai ai-pencil"></i></a>
                                    &nbsp;
                                    <a class="delete" href="<?=ADMIN;?>/currency/delete?id=<?=$currency->id;?>"><i class="ai ai-close text-danger"></i></a>
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