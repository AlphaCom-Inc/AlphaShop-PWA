<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>/order">Список заказов</a></li>
                    <li class="breadcrumb-item">Заказ №<?=$order['id'];?></li>
                </ol>
            </div>
            <div class="col-sm-6">
                <div class="float-sm-right">
                    <?php if(!$order['status']): ?>
                        <a href="<?=ADMIN;?>/order/change?id=<?=$order['id'];?>&status=1" class="btn btn-success btn-sm"><i class="ai ai-cart-outline"></i> Одобрить</a>
                    <?php else: ?>
                        <a href="<?=ADMIN;?>/order/change?id=<?=$order['id'];?>&status=0" class="btn btn-default btn-sm"><i class="ai ai-sync"></i> Вернуть на доработку</a>
                    <?php endif; ?>
                    <a href="<?=ADMIN;?>/order/delete?id=<?=$order['id'];?>" class="btn btn-danger btn-sm delete"><i class="ai ai-trash-outline"></i> Удалить</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card order-card">
                <div class="card-body p-0">
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td>Номер заказа</td>
                                <td><?=$order['id'];?></td>
                            </tr>
                            <tr>
                                <td><i class="ai ai-calendar-outline"></i>&nbsp; Дата заказа</td>
                                <td><?=$order['date'];?></td>
                            </tr>
                            <tr>
                                <td><i class="ai ai-calendar-number-outline"></i>&nbsp; Дата изменения</td>
                                <td><?=$order['update_at'];?></td>
                            </tr>
                            <tr>
                                <td><i class="ai ai-albums-outline"></i>&nbsp; Кол-во позиций в заказе</td>
                                <td><?=count($order_products);?></td>
                            </tr>
                            <tr>
                                <td><i class="ai ai-logo-usd"></i>&nbsp; Сумма заказа</td>
                                <td><?=$order['sum'];?> <?=$order['currency'];?></td>
                            </tr>
                            <tr>
                                <td><i class="ai ai-text-outline"></i>&nbsp; Имя заказчика</td>
                                <td><?=$order['name'];?></td>
                            </tr>
                            <tr>
                                <td><i class="ai ai-radio-button-off-outline"></i>&nbsp; Статус</td>
                                <td><?=$order['status'] ? '<i class="ai ai-radio-button-on text-success"></i> Завершен' : '<i class="ai ai-radio-button-on text-danger"></i> Новый';?></td>
                            </tr>
                            <tr>
                                <td><i class="ai ai-chatbox-ellipses-outline"></i>&nbsp; Комментарий</td>
                                <td><?=$order['note'];?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <h3 class="m-3">Детали заказа</h3>
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th><i class="ai ai-text-outline"></i>&nbsp; Наименование</th>
                            <th><i class="ai ai-albums-outline"></i>&nbsp; Кол-во</th>
                            <th><i class="ai ai-logo-usd"></i>&nbsp; Цена</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $qty = 0; foreach($order_products as $product): ?>
                            <tr class="text-center">
                                <td><?=$product->id;?></td>
                                <td><?=$product->title;?></td>
                                <td><?=$product->qty; $qty += $product->qty?></td>
                                <td><?=$product->price;?></td>
                            </tr>
                        <?php endforeach; ?>
                            <tr class="text-center">
                                <td colspan="2">
                                    <b>Итого:</b>
                                </td>
                                <td><b><?=$qty;?></b></td>
                                <td><b><?=$order['sum'];?> <?=$order['currency'];?></b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->