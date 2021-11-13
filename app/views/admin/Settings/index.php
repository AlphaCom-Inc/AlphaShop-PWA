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
                                    <div class="col-sm-2 align-items-center ml-3">
                                        <b>Favicon</b>
                                        <br>
                                        <div class="card mt-2 file-upload">
                                            <div class="card-body p-0">
                                                <div id="single" data-url="settings/favicon" data-type="favicon" data-class="brand-image settings-favicon" class="favicon" data-name="favicon">
                                                    <img src="/images/favicon/<?=\alphashop\App::$app->getParams('favicon');?>" alt="Favicon" class="brand-image settings-favicon">
                                                </div>
                                            </div>
                                            <div class="overlay" style="display: none;">
                                                <i class="ai ai-sync fa-3x fa-spin"></i>
                                            </div>
                                        </div>
                                        <p>Рекомендуемый размер: 512x512</p>
                                    </div>
                                    <div class="col-sm-2 align-items-center ml-4 mr-4">
                                        <b>Логотип</b>
                                        <br>
                                        <div class="card mt-2 file-upload">
                                            <div class="card-body p-0">
                                                <div id="last" data-url="settings/logo" data-type="logo" data-class="brand-image settings-favicon" class="logo" data-name="logo">
                                                    <img src="/images/logo/<?=\alphashop\App::$app->getParams('logo');?>" alt="Favicon" class="brand-image settings-favicon">
                                                </div>
                                            </div>
                                            <div class="overlay" style="display: none;">
                                                <i class="ai ai-sync fa-3x fa-spin"></i>
                                            </div>
                                        </div>
                                        <p>Рекомендуемый размер: 149х37</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group has-feedback">
                                            <label for="shop_name">Названия <span style="color: red;position:relative; left: 2px;">*</span></label>
                                            <input class="form-control" name="shop_name" id="shop_name" type="text" value="<?=\alphashop\App::$app->getParams('shop_name');?>" required>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="keywords">Описания</label>
                                            <input class="form-control" name="keywords" id="keywords" type="text" value="<?=\alphashop\App::$app->getParams('description');?>" required>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="description">Ключовые слова</label>
                                            <input class="form-control" name="description" id="description" type="text" value="<?=\alphashop\App::$app->getParams('keywords');?>" required>
                                        </div>
                                        <div class="row">
                                            <div class="form-group has-feedback col-sm-6">
                                                <label for="pagination">Пагинатция <span style="color: red;position:relative; left: 2px;">*</span></label>
                                                <input class="form-control" type="number" name="pagination" id="pagination" value="<?=\alphashop\App::$app->getParams('pagination');?>" required>
                                            </div>
                                            <div class="form-group has-feedback col-sm-6">
                                                <label for="pagination_adm">Пагинатция <small style="color: red;position:relative; top: -3px; left: 5px;">(Admin)</small> <span style="color: red;position:relative; left: 2px;">*</span></label>
                                                <input class="form-control" type="number" name="pagination_adm" id="pagination_adm" value="<?=\alphashop\App::$app->getParams('pagination_adm');?>" required>
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
                                <div class="card-body row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="form-group has-feedback col-sm-4">
                                                <label for="smtp_host">SMTP Хост <span style="color: red;position:relative; left: 2px;">*</span></label>
                                                <input class="form-control" name="smtp_host" id="smtp_host" type="text" value="<?=\alphashop\App::$app->getParams('smtp_host');?>" required>
                                            </div>
                                            <div class="form-group has-feedback col-sm-4">
                                                <label for="smtp_port">SMTP Порт <span style="color: red;position:relative; left: 2px;">*</span></label>
                                                <input class="form-control" name="smtp_port" id="smtp_port" type="text" value="<?=\alphashop\App::$app->getParams('smtp_port');?>" required>
                                            </div>
                                            <div class="form-group has-feedback col-sm-4">
                                                <label for="smtp_protocol">SMTP Протокол <span style="color: red;position:relative; left: 2px;">*</span></label>
                                                <input class="form-control" name="smtp_protocol" id="smtp_protocol" type="text" value="<?=\alphashop\App::$app->getParams('smtp_protocol');?>" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group has-feedback col-sm-6">
                                                <label for="smtp_login">SMTP Логин <span style="color: red;position:relative; left: 2px;">*</span></label>
                                                <input class="form-control" name="smtp_login" id="smtp_login" type="text" value="<?=\alphashop\App::$app->getParams('smtp_login');?>" required>
                                            </div>
                                            <div class="form-group has-feedback col-sm-6">
                                                <label for="smtp_password">SMTP Пароль <span style="color: red;position:relative; left: 2px;">*</span></label>
                                                <div class="input-group" data-input-type="password">
                                                    <input class="form-control" type="password" name="smtp_password" id="smtp_password" value="<?=\alphashop\App::$app->getParams('smtp_password');?>" required>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text btn" data-btn-type="password" style="border-radius: 0 .25rem .25rem 0;"><i class="ai ai-eye"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary"><i class="ai ai-save-outline"></i> Сохранить</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="settings_contacts">
                            <form action="<?=ADMIN;?>/settings/contacts" method="post" data-toggle="validator" id="update">
                                <div class="card-body row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="form-group has-feedback col-sm-4">
                                                <label for="telephone">Телефон <span style="color: red;position:relative; left: 2px;">*</span></label>
                                                <input class="form-control" name="telephone" data-inputmask='"mask": "+998 (00) 000-00-00"' id="telephone" type="text" data-mask value="<?=\alphashop\App::$app->getParams('telephone');?>" required>
                                            </div>
                                            <div class="form-group has-feedback col-sm-4">
                                                <label for="email">Эл. почта <span style="color: red;position:relative; left: 2px;">*</span></label>
                                                <input class="form-control" name="email" id="email" type="text" value="<?=\alphashop\App::$app->getParams('email');?>" required>
                                            </div>
                                            <div class="form-group has-feedback col-sm-4">
                                                <label for="address">Адресс <span style="color: red;position:relative; left: 2px;">*</span></label>
                                                <input class="form-control" name="address" id="address" type="text" value="<?=\alphashop\App::$app->getParams('address');?>" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group has-feedback col-sm-12">
                                                <label for="google_geo_code">Google Geo Code <span style="color: red;position:relative; left: 2px;">*</span></label>
                                                <input class="form-control" name="google_geo_code" id="google_geo_code" type="text" value="<?=\alphashop\App::$app->getParams('google_geo_code');?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary"><i class="ai ai-save-outline"></i> Сохранить</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="settings_socials">
                            <form action="<?=ADMIN;?>/settings/socials" method="post" data-toggle="validator" id="update">
                                <div class="card-body row">
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="form-group has-feedback col-sm-4">
                                                <label for="twitter">Twitter</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ai ai-logo-twitter"></i></span>
                                                    </div>
                                                    <input class="form-control" name="twitter" id="twitter" type="text" value="<?=\alphashop\App::$app->getSocials('twitter');?>">
                                                </div>
                                            </div>
                                            <div class="form-group has-feedback col-sm-4">
                                                <label for="facebook">Facebook</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ai ai-logo-facebook"></i></span>
                                                    </div>
                                                    <input class="form-control" name="facebook" id="facebook" type="text" value="<?=\alphashop\App::$app->getSocials('facebook');?>">
                                                </div>
                                            </div>
                                            <div class="form-group has-feedback col-sm-4">
                                                <label for="instagram">Instagram</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ai ai-logo-instagram"></i></span>
                                                    </div>
                                                    <input class="form-control" name="instagram" id="instagram" type="text" value="<?=\alphashop\App::$app->getSocials('instagram');?>">
                                                </div>
                                            </div>
                                            <div class="form-group has-feedback col-sm-4">
                                                <label for="telegram">Telegram</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fab fa-telegram"></i></span>
                                                    </div>
                                                    <input class="form-control" name="telegram" id="telegram" type="text" value="<?=\alphashop\App::$app->getSocials('telegram');?>">
                                                </div>
                                            </div>
                                            <div class="form-group has-feedback col-sm-4">
                                                <label for="youtube">Youtube</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ai ai-logo-youtube"></i></span>
                                                    </div>
                                                    <input class="form-control" name="youtube" id="youtube" type="text" value="<?=\alphashop\App::$app->getSocials('youtube');?>">
                                                </div>
                                            </div>
                                            <div class="form-group has-feedback col-sm-4">
                                                <label for="mail">Mail</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ai ai-mail"></i></span>
                                                    </div>
                                                    <input class="form-control" name="mail" id="mail" type="text" value="<?=\alphashop\App::$app->getSocials('mail');?>">
                                                </div>
                                            </div>
                                            <div class="form-group has-feedback col-sm-4">
                                                <label for="tiktok">TikTok</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ai ai-logo-tiktok"></i></span>
                                                    </div>
                                                    <input class="form-control" name="tiktok" id="tiktok" type="text" value="<?=\alphashop\App::$app->getSocials('tiktok');?>">
                                                </div>
                                            </div>
                                            <div class="form-group has-feedback col-sm-4">
                                                <label for="vk">Vk</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ai ai-logo-vk"></i></span>
                                                    </div>
                                                    <input class="form-control" name="vk" id="vk" type="text" value="<?=\alphashop\App::$app->getSocials('vk');?>">
                                                </div>
                                            </div>
                                            <div class="form-group has-feedback col-sm-4">
                                                <label for="linkedin">LinkedIN</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ai ai-logo-linkedin"></i></span>
                                                    </div>
                                                    <input class="form-control" name="linkedin" id="linkedin" type="text" value="<?=\alphashop\App::$app->getSocials('linkedin');?>">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
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