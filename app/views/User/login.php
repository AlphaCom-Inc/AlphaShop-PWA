<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Вход</h2>
            <ul>
                <li><a href="<?=PATH;?>">Главное</a></li>
                <li class="active">Вход</li>
            </ul>
        </div>
    </div>
</div>

<div class="kenne-login-register_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
                <!-- Login Form s-->
                <form action="user/login" method="post">
                    <div class="login-form">
                        <h4 class="login-title">Вход</h4>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <label>Логин</label>
                                <input type="text" name="login" placeholder="Имя пользователя">
                            </div>
                            <div class="col-12 mb--20">
                                <label>Пароль</label>
                                <input type="password" name="password" placeholder="Пароль">
                            </div>
                            <div class="col-md-8">
                                <div class="check-box">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Запомнить меня</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="forgotton-password_info">
                                    <a href="user/recover"> Забыли пароль?</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="kenne-login_btn">Вход</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>