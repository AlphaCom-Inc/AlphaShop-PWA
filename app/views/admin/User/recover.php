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

            <form action="<?=ADMIN;?>/user/recover" method="post">
                <div class="row pincode">
                    <div class="col-sm-3">
                        <input type="text" name="login" class="form-control" maxlength="5">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="login" class="form-control" maxlength="5">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="login" class="form-control" maxlength="5">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="login" class="form-control" maxlength="5">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </form>

            <hr>

            <p class="mb-1">
                <a href="<?=ADMIN;?>/user/recover">Востановить пароль</a>
            </p>
        </div>
    </div>
</div>

