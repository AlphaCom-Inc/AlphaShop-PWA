<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Контакты</h2>
            <ul>
                <li><a href="<?=PATH;?>/">Главное</a></li>
                <li class="active">Контакты</li>
            </ul>
        </div>
    </div>
</div>

<div class="contact-main-page">
    <div class="container">
        <iframe src="https://www.google.com/<?=\alphashop\App::$app->getParams('google_geo_code')?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
                <div class="contact-page-side-content">
                    <h3 class="contact-page-title">Контакты</h3>
                    <p class="contact-page-message">Claritas est etiam processus dynamicus, qui sequitur
                        mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum
                        claram anteposuerit litterarum formas human.</p>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-fax"></i> Address</h4>
                        <p><?=nl2br(\alphashop\App::$app->getParams('address'));?></p>
                    </div>
                    <div class="single-contact-block">
                        <h4><i class="fa fa-phone"></i> Phone</h4>
                        <p><?=\alphashop\App::$app->getParams('telephone');?></p>
                    </div>
                    <div class="single-contact-block last-child">
                        <h4><i class="fa fa-envelope-o"></i> Email</h4>
                        <p><?=\alphashop\App::$app->getParams('email');?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 order-2 order-lg-1">
                <div class="contact-form-content">
                    <h3 class="contact-page-title">Обратная свазь</h3>
                    <div class="contact-form">
                        <form id="contact-form" action="http://hasthemes.com/file/mail.php" method="post">
                            <div class="form-group">
                                <label>Ваша имя <span class="required">*</span></label>
                                <input type="text" name="con_name" id="con_name" required>
                            </div>
                            <div class="form-group">
                                <label>Ваш e-mail <span class="required">*</span></label>
                                <input type="email" name="con_email" id="con_email" required>
                            </div>
                            <div class="form-group">
                                <label>Тема</label>
                                <input type="text" name="con_subject" id="con_subject">
                            </div>
                            <div class="form-group form-group-2">
                                <label>Ваш сообщения</label>
                                <textarea name="con_message" id="con_message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" value="submit" id="submit" class="kenne-contact-form_btn" name="submit">Отправить</button>
                            </div>
                        </form>
                    </div>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div>