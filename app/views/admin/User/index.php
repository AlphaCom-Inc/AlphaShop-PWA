<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item">Список пользователей</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="<?=ADMIN;?>/user/add" class="float-sm-right btn btn-sm btn-primary"><i class="ai ai-add"></i>&nbsp; Добавить пользователь</a>
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
                            <th><i class="ai ai-at"></i>&nbsp; Логин</th>
                            <th><i class="ai ai-mail-outline"></i>&nbsp; Email</th>
                            <th><i class="ai ai-text-outline"></i>&nbsp; Имя</th>
                            <th><i class="ai ai-checkmark-circle-outline"></i>&nbsp; Роль</th>
                            <th><i class="ai ai-options-outline"></i>&nbsp; Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($users as $user): ?>
                            <tr class="text-center">
                                <td><?=$user->id;?></td>
                                <td><?=$user->login;?></td>
                                <td><?=$user->email;?></td>
                                <td><?=$user->name;?></td>
                                <td><?=$user->role;?></td>
                                <td>
                                    <a href="<?=ADMIN;?>/user/edit?id=<?=$user->id;?>">
                                        <i class="ai ai-eye-outline"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="float-left">(<?=count($users);?> пользователей из <?=$count;?>)</div>
                    <?php if($pagination->countPages > 1): ?>
                        <?=$pagination;?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->