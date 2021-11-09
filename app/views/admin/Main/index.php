<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Главное</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="<?=ADMIN;?>/cache" class="float-sm-right btn btn-sm btn-outline-danger" title="Кеширование"><i class="ai ai-server-outline"></i> Кеш</a>
            </div>
        </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-gradient-primary">
                    <div class="inner">
                        <h3><?=$countNewOrders;?></h3>

                        <p>Новые заказы</p>
                    </div>
                    <div class="icon">
                        <i class="ai ai-bag-outline"></i>
                    </div>
                    <a href="<?=ADMIN;?>/order" class="small-box-footer">Все заказы <i class="ai ai-chevron-forward"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-gradient-teal">
                    <div class="inner">
                        <h3><?=$countProducts?></h3>

                        <p>В продаже</p>
                    </div>
                    <div class="icon">
                        <i class="ai ai-flag-outline"></i>
                    </div>
                    <a href="<?=ADMIN;?>/product" class="small-box-footer">Все продукты <i class="ai ai-chevron-forward"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-gradient-orange">
                    <div class="inner">
                        <h3><?=$countCurrency;?></h3>

                        <p>Валюты</p>
                    </div>
                    <div class="icon">
                        <i class="ai ai-logo-usd"></i>
                    </div>
                    <a href="<?=ADMIN;?>/currency" class="small-box-footer">Все валюты <i class="ai ai-chevron-forward"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-maroon">
                    <div class="inner">
                        <h3><?=$countUsers;?></h3>

                        <p>Пользователи</p>
                    </div>
                    <div class="icon">
                        <i class="ai ai-person-outline"></i>
                    </div>
                    <a href="<?=ADMIN;?>/user" class="small-box-footer">Все пользователи <i class="ai ai-chevron-forward"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
                <h3 class="m-3 d-inline">Недавные заккаазы</h3>
                <a class="d-inline float-right btn btn-sm btn-primary" href="<?=ADMIN;?>/order">Все заказы <i class="ai ai-chevron-forward"></i></a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-0">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th><i class="ai ai-person-outline"></i>&nbsp; Покупатель</th>
                                <th><i class="ai ai-radio-button-off-outline"></i>&nbsp; Статус</th>
                                <th><i class="ai ai-logo-usd"></i>&nbsp; Сумма</th>
                                <th><i class="ai ai-calendar-outline"></i>&nbsp; Дата создания</th>
                                <th><i class="ai ai-calendar-number-outline"></i>&nbsp; Дата изменения</th>
                                <th><i class="ai ai-options-outline"></i>&nbsp; Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($orders as $order): ?>
                                <?php $class = $order['status'] ? 'table-success' : ''; ?>
                                <tr class="text-center">
                                    <td><?=$order['id'];?></td>
                                    <td><?=$order['name'];?></td>
                                    <td><?=$order['status'] ? '<i class="ai ai-radio-button-on text-success"></i>&nbsp; Завершен' : '<i class="ai ai-radio-button-on text-danger"></i>&nbsp; Новый';?></td>
                                    <td><?=$order['sum'];?> <?=$order['currency'];?></td>
                                    <td><?=$order['date'];?></td>
                                    <td><?=$order['update_at'];?></td>
                                    <td>
                                        <a href="<?=ADMIN;?>/order/view?id=<?=$order['id'];?>">
                                            <i class="ai ai-eye-outline"></i>
                                        </a>
                                        &nbsp;
                                        <a class="delete" href="<?=ADMIN;?>/order/delete?id=<?=$order['id'];?>">
                                            <i class="ai ai-trash-outline text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>