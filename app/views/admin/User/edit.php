<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>/user">Список пользователей</a></li>
                    <li class="breadcrumb-item"><?=h($user->login);?></li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="<?=ADMIN;?>/user" class="float-sm-right btn btn-sm btn-danger"><i class="ai ai-close"></i>&nbsp; Отменить</a>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form action="<?=ADMIN;?>/user/edit" method="post" data-toggle="validator">
                    <div class="card-body">
                        <div class="form-group has-feedback">
                            <label for="login">Логин</label>
                            <input type="text" class="form-control" name="login" id="login" value="<?=h($user->login);?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Пароль</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль, если хотите его изменить">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="name">Имя</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?=h($user->name);?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?=h($user->email);?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="address">Адрес</label>
                            <input type="text" class="form-control" name="address" id="address" value="<?=h($user->address);?>" required>
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <label>Роль</label>
                            <select name="role" id="role" class="form-control">
                                <option value="user"<?php if($user->role == 'user') echo ' selected'; ?>>Пользователь</option>
                                <option value="admin"<?php if($user->role == 'admin') echo ' selected'; ?>>Администратор</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="id" value="<?=$user->id;?>">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>

            <h3 class="m-3">Заказы пользователя</h3>
            <div class="card">
                <div class="card-body p-0">
                    <?php if($orders): ?>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th><i class="ai ai-radio-button-off"></i>&nbsp; Статус</th>
                                <th><i class="ai ai-logo-usd"></i>&nbsp; Сумма</th>
                                <th><i class="ai ai-calendar-outline"></i>&nbsp; Дата создания</th>
                                <th><i class="ai ai-calendar-number-outline"></i>&nbsp; Дата изменения</th>
                                <th><i class="ai ai-options-outline"></i>&nbsp; Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($orders as $order): ?>
                                <?php $class = $order['status'] ? 'success' : ''; ?>
                                <tr class="text-center <?=$class;?>">
                                    <td><?=$order['id'];?></td>
                                    <td><?=$order['status'] ? '<i class="ai ai-radio-button-on text-success"></i>&nbsp; Завершен' : '<i class="ai ai-radio-button-on text-danger"></i>&nbsp; Новый';?></td>
                                    <td><?=$order['sum'];?> <?=$order['currency'];?></td>
                                    <td><?=$order['date'];?></td>
                                    <td><?=$order['update_at'];?></td>
                                    <td>
                                        <a href="<?=ADMIN;?>/order/view?id=<?=$order['id'];?>">
                                            <i class="ai ai-eye-outline"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <p class="text-danger">Пользокатель пока ничего не заказывал...</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->