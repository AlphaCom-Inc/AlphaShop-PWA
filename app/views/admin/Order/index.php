<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item">Список заказов</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
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
                <div class="card-footer">
                    <div class="float-left"><?=count($orders);?> заказа(ов) из <?=$count;?></div>
                    <?php if($pagination->countPages > 1): ?>
                        <div class="float-right">
                            <?=$pagination;?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->