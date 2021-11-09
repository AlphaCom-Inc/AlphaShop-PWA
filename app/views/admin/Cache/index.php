<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item">Очистка кэша</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="<?=ADMIN;?>/cache/delete?key=all" class="float-sm-right btn btn-sm btn-danger delete"><i class="ai ai-trash"></i> Очиститьт все</a>
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
                            <th><i class="ai ai-text-outline"></i>&nbsp; Название</th>
                            <th><i class="ai ai-reader-outline"></i>&nbsp; Описание</th>
                            <th><i class="ai ai-options-outline"></i>&nbsp; Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>Кэш категорий</td>
                                <td>Меню категорий на сайте. Кэшируется на 1 час</td>
                                <td><a class="delete" href="<?=ADMIN;?>/cache/delete?key=category"><i class="ai ai-close text-danger"></i></a></td>
                            </tr>
                            <tr class="text-center">
                                <td>Кэш фильтров</td>
                                <td>Кэш фильтров и групп фильтров. Кэшируется на 1 час</td>
                                <td><a class="delete" href="<?=ADMIN;?>/cache/delete?key=filter"><i class="ai ai-close text-danger"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->