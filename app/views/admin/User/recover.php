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
                    <div class="col-sm">
                        <input type="text" name="key1" class="form-control" maxlength="5" data-next="key2">
                    </div>
                    <div class="col-sm">
                        <input type="text" id="key2" name="key2" class="form-control" maxlength="5" data-next="key3">
                    </div>
                    <div class="col-sm">
                        <input type="text" id="key3" name="key3" class="form-control" maxlength="5" data-next="key4">
                    </div>
                    <div class="col-sm">
                        <input type="text" id="key4" name="key4" class="form-control" maxlength="5" data-next="key5">
                    </div>
                    <div class="col-sm">
                        <input type="text" id="key5" name="key5" class="form-control" maxlength="5" data-next="submit">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" id="submit">Sign In</button>
            </form>

            <hr>

            <p class="mb-1">
                <a href="<?=ADMIN;?>/user/recover">Востановить пароль</a>
            </p>
        </div>
    </div>
</div>

