<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item">Блог посты</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="<?=ADMIN;?>/blog/add" class="float-sm-right btn btn-sm btn-primary"><i class="ai ai-add"></i> Добавить пост</a>
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
                            <th width="150px"><i class="ai ai-image-outline"></i>&nbsp; Пост</th>
                            <th><i class="ai ai-text"></i>&nbsp; Наименование</th>
                            <th><i class="ai ai-layers-outline"></i>&nbsp; Автор</th>
                            <th><i class="ai ai-logo-usd"></i>&nbsp; Дата</th>
                            <th><i class="ai ai-radio-button-off"></i>&nbsp; Статус</th>
                            <th><i class="ai ai-options-outline"></i>&nbsp; Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($posts as $post): ?>
                            <tr class="text-center">
                                <td><?=$post['id'];?></td>
                                <td><img class="product-image" src="/images/blog/<?=$post['img'];?>" alt="<?=$post['title'];?>"></td>
                                <td><?=$post['title'];?></td>
                                <td><?=$post['author'];?></td>
                                <td><?=$post['date'];?></td>
                                <td><?=$post['status'] ? 'On' : 'Off';?></td>
                                <td>
                                    <a href="<?=ADMIN;?>/blog/edit?id=<?=$post['id'];?>">
                                        <i class="ai ai-pencil"></i>
                                    </a>
                                    &nbsp;
                                    <a href="<?=PATH;?>/blog/<?=$post['alias'];?>" target="_blank">
                                        <i class="ai ai-eye-outline"></i>
                                    </a>
                                    &nbsp;
                                    <a class="delete" href="<?=ADMIN;?>/blog/delete?id=<?=$post['id'];?>">
                                        <i class="ai ai-trash-outline text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="float-left">(<?=count($posts);?> товаров из <?=$count;?>)</div>
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