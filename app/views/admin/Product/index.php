<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item">Список товаров</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="<?=ADMIN;?>/product/add" class="float-sm-right btn btn-sm btn-primary"><i class="ai ai-add"></i>&nbsp; Добавить товар</a>
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
                            <th width="150px"><i class="ai ai-image-outline"></i>&nbsp; Продукт</th>
                            <th><i class="ai ai-layers-outline"></i>&nbsp; Категория</th>
                            <th><i class="ai ai-text"></i>&nbsp; Наименование</th>
                            <th><i class="ai ai-logo-usd"></i>&nbsp; Цена</th>
                            <th><i class="ai ai-radio-button-off"></i>&nbsp; Статус</th>
                            <th><i class="ai ai-options-outline"></i>&nbsp; Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($products as $product): ?>
                            <tr class="text-center">
                                <td><?=$product['id'];?></td>
                                <td><img class="product-image" src="/images/product/<?=$product['img'];?>" alt="<?=$product['title'];?>"></td>
                                <td><?=$product['cat'];?></td>
                                <td><?=$product['title'];?></td>
                                <td><?=$product['price'];?></td>
                                <td><?=$product['status'] ? 'On' : 'Off';?></td>
                                <td>
                                    <a href="<?=ADMIN;?>/product/edit?id=<?=$product['id'];?>">
                                        <i class="ai ai-pencil"></i>
                                    </a>
                                    &nbsp;
                                    <a href="<?=PATH;?>/product/<?=$product['alias'];?>" target="_blank">
                                        <i class="ai ai-eye-outline"></i>
                                    </a>
                                    &nbsp;
                                    <a class="delete" href="<?=ADMIN;?>/product/delete?id=<?=$product['id'];?>">
                                        <i class="ai ai-trash-outline text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="float-left">(<?=count($products);?> товаров из <?=$count;?>)</div>
                    <?php if($pagination->countPages > 1): ?>
                        <div class="float-rgiht">
                            <?=$pagination;?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->