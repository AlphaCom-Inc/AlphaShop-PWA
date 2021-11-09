<?php if(isset($_SESSION['error'])): ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Ошибка!</h4>
        <?=$_SESSION['error']; unset($_SESSION['error'])?>
    </div>
<?php endif; ?>

<div class="login-box">
    <div class="login-logo">
        <a href="<?=ADMIN;?>"><b>Alpha Shoop</b> Admin</a>
    </div>

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="<?=ADMIN;?>/user/auth" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="login" class="form-control" placeholder="Логин">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Пароль">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Запомнить меня
                            </label>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </div>
            </form>

            <hr>

            <p class="mb-1">
                <a href="<?=ADMIN;?>/user/recover">Востановить пароль</a>
            </p>
        </div>
    </div>
</div>