<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item">Настройки</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex p-0">
                    <ul class="nav nav-pills p-2">
                        <li class="nav-item"><a class="nav-link active" href="#settings_general" data-toggle="tab">Основные</a></li>
                        <li class="nav-item"><a class="nav-link" href="#settings_smtp" data-toggle="tab">SMTP</a></li>
                        <li class="nav-item"><a class="nav-link" href="#settings_contacts" data-toggle="tab">Контакты</a></li>
                        <li class="nav-item"><a class="nav-link" href="#settings_socials" data-toggle="tab">Соц. сети</a></li>
                    </ul>
                </div>
                <div class="card-body p-0">
                    <div class="tab-content">
                        <div class="tab-pane active" id="settings_general">
                            <form action="<?=ADMIN;?>/settings/general" method="post" data-toggle="validator" id="update">
                                <div class="card-body row">
                                    <div class="col-sm-2 align-items-center ml-3 mr-5">
                                        <b>Favicon</b>
                                        <br><br>
                                        <div class="card file-upload">
                                            <div class="card-body p-0">
                                                <div class="favicon" id="favicon"  data-url="settings/favicon" data-name="favicon">
                                                    <img src="/images/favicon/favicon.png" alt="Favicon" class="brand-image settings-favicon">
                                                </div>
                                            </div>
                                            <div class="overlay" style="display: none;">
                                                <i class="ai ai-sync fa-3x fa-spin"></i>
                                            </div>
                                        </div>
                                        <p>Рекомендуемый размер: 512x512</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group has-feedback">
                                            <label for="login">Названия <span style="color: red;position:relative; left: 2px;">*</span></label>
                                            <input class="form-control" name="login" id="login" type="text" value="<?= isset($_SESSION['form_data']['login']) ? $_SESSION['form_data']['login'] : '' ?>" required>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="password">Описания</label>
                                            <input class="form-control" name="password" id="password" type="password" data-minlength="6" data-error="Пароль должен включать не менее 6 символов" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="email">Ключовые слова</label>
                                            <input class="form-control" name="email" id="email" type="email" value="<?= isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : '' ?>" required>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="name">Эл. почта <small style="color: red;position:relative; top: -3px; left: 5px;">(Admin)</small> <span style="color: red;position:relative; left: 2px;">*</span></label>
                                            <input class="form-control" name="name" id="name" type="text" value="<?= isset($_SESSION['form_data']['name']) ? $_SESSION['form_data']['name'] : '' ?>" required>
                                        </div>
                                        <div class="row">
                                            <div class="form-group has-feedback col-sm-6">
                                                <label for="pagination">Пагинатция <span style="color: red;position:relative; left: 2px;">*</span></label>
                                                <input class="form-control" type="number" name="pagination" id="pagination" value="<?= isset($_SESSION['form_data']['address']) ? $_SESSION['form_data']['address'] : '' ?>" required>
                                            </div>
                                            <div class="form-group has-feedback col-sm-6">
                                                <label for="pagination_adm">Пагинатция <small style="color: red;position:relative; top: -3px; left: 5px;">(Admin)</small> <span style="color: red;position:relative; left: 2px;">*</span></label>
                                                <input class="form-control" type="number" name="pagination_adm" id="pagination_adm" value="<?= isset($_SESSION['form_data']['address']) ? $_SESSION['form_data']['address'] : '' ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary"><i class="ai ai-save-outline"></i> Сохранить</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="settings_smtp">
                            <form action="<?=ADMIN;?>/settings/smtp" method="post" data-toggle="validator" id="update">
                                <div class="card-body">

                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary"><i class="ai ai-save-outline"></i> Сохранить</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="settings_contacts">
                            <form action="<?=ADMIN;?>/settings/contacts" method="post" data-toggle="validator" id="update">
                                <div class="card-body">

                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary"><i class="ai ai-save-outline"></i> Сохранить</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="settings_socials">
                            <form action="<?=ADMIN;?>/settings/socials" method="post" data-toggle="validator" id="update">
                                <div class="card-body">

                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary"><i class="ai ai-save-outline"></i> Сохранить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>