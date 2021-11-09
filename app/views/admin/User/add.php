<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>/user">Список пользователей</a></li>
                    <li class="breadcrumb-item">Новый товар</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="<?=ADMIN;?>/user" class="float-sm-right btn btn-sm btn-danger"><i class="ai ai-close"></i> Отменить</a>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="post" action="/user/signup" role="form" data-toggle="validator">
                    <div class="card-body">
                        <div class="form-group has-feedback">
                            <label for="login">Логин</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ai ai-at"></i></span>
                                </div>
                                <input class="form-control" name="login" id="login" type="text" data-error="Вы можете использовать a-z, 0-9 и _" value="<?= isset($_SESSION['form_data']['login']) ? $_SESSION['form_data']['login'] : '' ?>" required>
                            </div>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ai ai-lock-closed-outline"></i></span>
                                </div>
                                <input class="form-control" name="password" id="password" type="password" data-minlength="6" data-error="Пароль должен включать не менее 6 символов" required>
                            </div>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="phone">Phone</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ai ai-mail-outline"></i></span>
                                </div>
                                <input class="form-control" name="phone" id="phone" type="text" data-inputmask='"mask": "+998 (99) 999-99-99"' data-mask="" data-error="Вы действительный E-mail" value="<?= isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : '' ?>" required>
                            </div>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ai ai-mail-outline"></i></span>
                                </div>
                                <input class="form-control" name="email" id="email" type="email" data-type="email"  data-error="Вы действительный E-mail" value="<?= isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : '' ?>" required>
                            </div>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="name">Имя</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ai ai-text-outline"></i></span>
                                </div>
                                <input class="form-control" name="name" id="name" type="text" value="<?= isset($_SESSION['form_data']['name']) ? $_SESSION['form_data']['name'] : '' ?>" required>
                            </div>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="address">Адрес</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ai ai-location-outline"></i></span>
                                </div>
                                <input class="form-control" name="address" id="address" data-error="Введите адресс для доставки" value="<?= isset($_SESSION['form_data']['address']) ? $_SESSION['form_data']['address'] : '' ?>" required>
                            </div>
                            <div class="help-block with-errors text-danger"></div>
                        </div>
                        <div class="form-group">
                            <label>Роль</label>
                            <select class="form-control" name="role">
                                <option value="user">Пользователь</option>
                                <option value="admin">Администратор</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><i class="ai ai-add"></i> Добавить</button>
                    </div>
                </form>
                <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->