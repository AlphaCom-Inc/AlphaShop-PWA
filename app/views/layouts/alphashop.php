<?php

use alphashop\App;

?>
<!doctype html>
<html class="" lang="en">

<head>

    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="noindex, follow" />
    <?=$this->getMeta();?>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon/<?=App::$app->getParams('favicon');?>">

    <!-- CSS -->
    <link rel="stylesheet" href="alphashop/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="alphashop/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="alphashop/css/vendor/fontawesome-stars.min.css">
    <link rel="stylesheet" href="alphashop/css/vendor/ion-fonts.css">
    <link rel="stylesheet" href="alphashop/css/plugins/slick.css">
    <link rel="stylesheet" href="alphashop/css/plugins/animate.css">
    <link rel="stylesheet" href="alphashop/css/plugins/jquery-ui.min.css">
    <link rel="stylesheet" href="alphashop/css/plugins/nice-select.css">
    <link rel="stylesheet" href="alphashop/css/plugins/timecircles.css">

    <link rel="stylesheet" href="alphashop/css/style.css">
    <link rel="stylesheet" href="alphashop/css/app.css">

</head>

<body class="template-color-2">

<?/*=debug($_SESSION, 1);*/?>

    <div class="main-wrapper">

        <!--<div class="loading">
            <div class="text-center middle">
                    <span class="loader">
                <span class="loader-inner"></span>
                    </span>
            </div>
        </div>-->

        <header class="main-header_area-2">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="header-top_nav">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ht-menu">
                                    <ul>
                                        <li class="mt-2">Добро пожаловать</li>
                                        <!--<li><a href="javascript:void(0)">Currency<i class="ion-chevron-down"></i></a>
                                            <ul class="ht-dropdown ht-currency">
                                                <li><a href="javascript:void(0)">€ EUR</a></li>
                                                <li class="active"><a href="javascript:void(0)">£ Pound Sterling</a></li>
                                                <li><a href="javascript:void(0)">$ Us Dollar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Language <i class="ion-chevron-down"></i></a>
                                            <ul class="ht-dropdown">
                                                <li class="active"><a href="javascript:void(0)"><img src="images/menu/icon/1.jpg" alt="Kenne Language Icon">English</a></li>
                                                <li><a href="javascript:void(0)"><img src="images/menu/icon/2.jpg" alt="Kenne Language Icon">Français</a>
                                                </li>
                                            </ul>
                                        </li>-->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="header-top_right">
                                    <ul>
                                        <?php if(!empty($_SESSION['user'])): ?>
                                        <li><a href="user"><?=h($_SESSION['user']['name']);?></a></li>
                                        <li><a href="user/logout">Выход</a></li>
                                        <?php else: ?>
                                        <li><a href="user/login">Вход</a></li>
                                        <li><a href="user/signup">Регистрация</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-middle_nav">
                                <div class="header-logo_area">
                                    <a href="<?=PATH;?>">
                                        <img src="images/menu/logo/1.png" alt="Header Logo">
                                    </a>
                                </div>
                                <div class="header-contact d-none d-md-flex">
                                    <i class="fa fa-headphones-alt"></i>
                                    <div class="contact-content">
                                        <p>
                                            Связаться с нами
                                            <br>
                                            Поддержка: <a href="tel:<?=App::$app->getParams('telephone');;?>"><?=App::$app->getParams('telephone');;?></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="header-search_area d-none d-lg-block">
                                    <form class="search-form" action="search" method="get" autocomplete="off">
                                        <input type="text" class="typeahead" id="typeahead" name="q" placeholder="Поиск">
                                        <button class="search-button"><i class="ion-ios-search"></i></button>
                                    </form>
                                </div>
                                <div class="header-right_area d-none d-lg-inline-block">
                                    <ul>
                                        <li class="mobile-menu_wrap d-flex d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                                <i class="ion-android-menu"></i>
                                            </a>
                                        </li>
                                        <li class="minicart-wrap">
                                            <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                <div class="minicart-count_area">
                                                    <span class="item-count" style="<?=!empty($_SESSION['cart']) ? 'display: inherit;' : 'display: none;';?>"><?=!empty($_SESSION['cart']) ? $_SESSION['cart.qty'] : null;?></span>
                                                    <i class="ion-bag"></i>
                                                </div>
                                                <div class="minicart-front_text">
                                                    <span class="total-price">
                                                    <?php if(!empty($_SESSION['cart'])): ?>
                                                        <?=$_SESSION['cart.currency']['symbol_left'] . $_SESSION['cart.sum'] . $_SESSION['cart.currency']['symbol_right'];?>
                                                    <?php else: ?>
                                                        Корзина пуста
                                                    <?php endif; ?>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-right_area header-right_area-2 d-inline-block d-lg-none">
                                    <ul>
                                        <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                                <i class="ion-android-menu"></i>
                                            </a>
                                        </li>
                                        <li class="minicart-wrap">
                                            <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                <div class="minicart-count_area">
                                                    <span class="item-count" style="<?=!empty($_SESSION['cart']) ? 'display: inherit;' : 'display: none;';?>">
                                                        <?php if(!empty($_SESSION['cart'])): ?>
                                                        <?=$_SESSION['cart.qty'];?>
                                                        <?php endif; ?>
                                                    </span>
                                                    <i class="ion-bag"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#searchBar" class="search-btn toolbar-btn">
                                                <i class="pe-7s-search"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#offcanvasMenu" class="menu-btn toolbar-btn color--white d-none d-lg-block">
                                                <i class="ion-android-menu"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-menu_area position-relative">
                                <nav class="main-nav d-flex justify-content-center">
                                    <ul>
                                        <li><a href="<?=PATH;?>">Главное</a></li>
                                        <li><a href="<?=PATH;?>/blog">Блог</a></li>
                                        <li><a href="<?=PATH;?>/product">Продукты</a></li>
                                        <li><a href="<?=PATH;?>/contact-us">Контакты</a></li>
                                        <li><a href="<?=PATH;?>/about">О Нас</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sticky-header_nav position-relative">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-lg-2 col-sm-6">
                                        <div class="header-logo_area">
                                            <a href="<?=PATH;?>">
                                                <img src="images/menu/logo/1.png" alt="Header Logo">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 d-none d-lg-block position-static">
                                        <div class="main-menu_area">
                                            <nav class="main-nav d-flex justify-content-center">
                                                <ul>
                                                    <li><a href="<?=PATH;?>">Главное</a></li>
                                                    <li><a href="<?=PATH;?>/blog">Блог</a></li>
                                                    <li><a href="<?=PATH;?>/product">Продукты</a></li>
                                                    <li><a href="<?=PATH;?>/contact-us">Контакты</a></li>
                                                    <li><a href="<?=PATH;?>/about">О Нас</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="header-right_area header-right_area-2">
                                            <ul>
                                                <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                                    <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                                        <i class="ion-android-menu"></i>
                                                    </a>
                                                </li>
                                                <li class="minicart-wrap">
                                                    <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                        <div class="minicart-count_area">
                                                            <span class="item-count" style="<?=!empty($_SESSION['cart']) ? 'display: inherit;' : 'display: none;';?>">
                                                        <?php if(!empty($_SESSION['cart'])): ?>
                                                            <?=$_SESSION['cart.qty'];?>
                                                        <?php endif; ?>
                                                    </span>
                                                            <i class="ion-bag"></i>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#searchBar" class="search-btn toolbar-btn">
                                                        <i class="ion-android-search"></i>
                                                    </a>
                                                </li>
                                                <li class="d-none d-lg-inline-block">
                                                    <a href="#offcanvasMenu" class="menu-btn toolbar-btn color--white">
                                                        <i class="ion-android-menu"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-minicart_wrapper" id="miniCart">
                <div class="offcanvas-menu-inner">
                    <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                    <div class="app-minicart-body"></div>
                </div>
            </div>
            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="#" class="btn-close white-close_btn"><i class="ion-android-close"></i></a>
                        <div class="offcanvas-inner_logo">
                            <a href="<?=PATH;?>">
                                <img src="images/menu/logo/1.png" alt="Header Logo">
                            </a>
                        </div>
                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li><a href="<?=PATH;?>">Главное</a></li>
                                <li><a href="<?=PATH;?>/blog">Блог</a></li>
                                <li><a href="<?=PATH;?>/product">Продукты</a></li>
                                <li><a href="<?=PATH;?>/contact-us">Контакты</a></li>
                                <li><a href="<?=PATH;?>/about">О Нас</a></li>
                            </ul>
                        </nav>
                        <nav class="offcanvas-navigation user-setting_area">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">
                                    <span class="mm-text">User Setting</span>
                                    </a>
                                </li>
                                <?php if(!empty($_SESSION['user'])): ?>
                                    <li><a href="#"><?=h($_SESSION['user']['name']);?></a></li>
                                    <li><a href="user/logout">Выход</a></li>
                                <?php else: ?>
                                    <li><a href="user/login">Вход</a></li>
                                    <li><a href="user/signup">Регистрация</a></li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="offcanvas-menu_wrapper" id="offcanvasMenu">
                <div class="offcanvas-menu-inner">
                    <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                    <div class="offcanvas-inner_logo">
                        <a href="shop-left-sidebar.html">
                            <img src="images/menu/logo/1.png" alt="Munoz's Offcanvas Logo">
                        </a>
                    </div>
                    <div class="short-desc">
                        <p>We are a team of designers and developers that create high quality HTML Template &
                            Woocommerce,
                            Shopify Themes.
                        </p>
                    </div>
                    <div class="offcanvas-component first-child">
                        <span class="offcanvas-component_title">Currency</span>
                        <ul class="offcanvas-component_menu">
                            <li><a href="javascript:void(0)">EUR</a></li>
                            <li><a href="javascript:void(0)">GBP</a></li>
                            <li class="active"><a href="javascript:void(0)">USD</a></li>
                        </ul>
                    </div>
                    <div class="offcanvas-component">
                        <span class="offcanvas-component_title">Language</span>
                        <ul class="offcanvas-component_menu">
                            <li class="active"><a href="javascript:void(0)">English</a></li>
                            <li><a href="javascript:void(0)">French</a></li>
                        </ul>
                    </div>
                    <div class="offcanvas-component">
                        <span class="offcanvas-component_title">My Account</span>
                        <ul class="offcanvas-component_menu">
                            <li><a href="my-account.html">Register</a></li>
                            <li><a href="login-register.html">Login</a></li>
                        </ul>
                    </div>
                    <div class="offcanvas-inner-social_link">
                        <div class="kenne-social_link">
                            <ul>
                                <?php if (App::$app->getSocials('facebook')): ?>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/<?=App::$app->getSocials('facebook');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="Facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (App::$app->getSocials('twitter')): ?>
                                    <li class="twitter">
                                        <a href="https://twitter.com/<?=App::$app->getSocials('twitter');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="Twitter">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (App::$app->getSocials('telegram')): ?>
                                    <li class="telegram">
                                        <a href="https://www.t.me/<?=App::$app->getSocials('telegram');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="Telegram">
                                            <i class="fab fa-telegram"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (App::$app->getSocials('youtube')): ?>
                                    <li class="youtube">
                                        <a href="https://www.youtube.com/<?=App::$app->getSocials('youtube');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="Youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (App::$app->getSocials('mail')): ?>
                                    <li class="mail">
                                        <a href="mailto:<?=App::$app->getSocials('mail');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="Mail">
                                            <i class="fas fa-at"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (App::$app->getSocials('instagram')): ?>
                                    <li class="instagram">
                                        <a href="https://instagram.com/<?=App::$app->getSocials('instagram');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="Instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (App::$app->getSocials('tiktok')): ?>
                                    <li class="tiktok">
                                        <a href="https://www.tiktok.com/<?=App::$app->getSocials('tiktok');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="TikTok">
                                            <i class="fab fa-tiktok"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (App::$app->getSocials('vk')): ?>
                                    <li class="vk">
                                        <a href="https://vk.com/<?=App::$app->getSocials('vk');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="ВКонтакте">
                                            <i class="fab fa-vk"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if (App::$app->getSocials('linkedin')): ?>
                                    <li class="linkedin">
                                        <a href="https://linkedin.com/<?=App::$app->getSocials('linkedin');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="LinkedIN">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-search_wrapper" id="searchBar">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                        <!-- Begin Offcanvas Search Area -->
                        <div class="offcanvas-search">
                            <form class="hm-searchbox search-form" action="search" method="get" autocomplete="off">
                                <input type="text" placeholder="Поиск" name="q">
                                <button class="search_btn" type="submit"><i
                                            class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <!-- Offcanvas Search Area End Here -->
                    </div>
                </div>
            </div>
            <div class="global-overlay"></div>
        </header>

        <?=$content;?>

        <!-- Begin Kenne's Footer Area -->
        <div class="kenne-footer_area bg-smoke_color">
            <div class="footer-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="newsletter-area">
                                <div class="newsletter-logo">
                                    <a href="javascript:void(0)">
                                        <img src="images/footer/logo/1.png" alt="Logo">
                                    </a>
                                </div>

                                <div class="kenne-social_link">
                                    <ul>
                                        <?php if (App::$app->getSocials('facebook')): ?>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/<?=App::$app->getSocials('facebook');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="Facebook">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if (App::$app->getSocials('twitter')): ?>
                                        <li class="twitter">
                                            <a href="https://twitter.com/<?=App::$app->getSocials('twitter');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="Twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if (App::$app->getSocials('telegram')): ?>
                                        <li class="telegram">
                                            <a href="https://www.t.me/<?=App::$app->getSocials('telegram');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="Telegram">
                                                <i class="fab fa-telegram"></i>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if (App::$app->getSocials('youtube')): ?>
                                        <li class="youtube">
                                            <a href="https://www.youtube.com/<?=App::$app->getSocials('youtube');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="Youtube">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if (App::$app->getSocials('mail')): ?>
                                        <li class="mail">
                                            <a href="mailto:<?=App::$app->getSocials('mail');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="Mail">
                                                <i class="fas fa-at"></i>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if (App::$app->getSocials('instagram')): ?>
                                        <li class="instagram">
                                            <a href="https://instagram.com/<?=App::$app->getSocials('instagram');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="Instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if (App::$app->getSocials('tiktok')): ?>
                                        <li class="tiktok">
                                            <a href="https://www.tiktok.com/<?=App::$app->getSocials('tiktok');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="TikTok">
                                                <i class="fab fa-tiktok"></i>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if (App::$app->getSocials('vk')): ?>
                                        <li class="vk">
                                            <a href="https://vk.com/<?=App::$app->getSocials('vk');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="ВКонтакте">
                                                <i class="fab fa-vk"></i>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                        <?php if (App::$app->getSocials('linkedin')): ?>
                                        <li class="linkedin">
                                            <a href="https://linkedin.com/<?=App::$app->getSocials('linkedin');?>" data-toggle="tooltip" target="_blank" title="" data-original-title="LinkedIN">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <div class="row footer-widgets_wrap">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="footer-widgets_title">
                                        <h4>Магазин</h4>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                            <li><a href="blog">Блог</a></li>
                                            <li><a href="product">Продукты</a></li>
                                            <li><a href="cart/view">Моя корзина</a></li>
                                            <li><a href="about">О Нас</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="footer-widgets_title">
                                        <h4>Акаунт</h4>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                            <?php if(!empty($_SESSION['user'])): ?>
                                            <li><a href="user">Мой профиль</a></li>
                                            <li><a href="user/orders">Мои заказы</a></li>
                                            <li><a href="user/logout">Выход</a></li>
                                            <?php else: ?>
                                            <li><a href="user/login">Вход</a></li>
                                            <li><a href="user/signup">Регистрация</a></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="footer-widgets_title">
                                        <h4>Категория</h4>
                                    </div>
                                    <div class="footer-widgets">
                                        <ul>
                                            <li><a href="javascript:void(0)">Men</a></li>
                                            <li><a href="javascript:void(0)">Women</a></li>
                                            <li><a href="javascript:void(0)">Jeans</a></li>
                                            <li><a href="javascript:void(0)">Shoes</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom_area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="copyright">
                                <span>Copyright &copy; 2021 <a href="javascript:void(0)">AlphaCom, Inc.</a> Все права зашишены.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="payment">
                                <img src="images/footer/payments.png" alt="Kenne's Payment Method">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="scroll-to-top" href=""><i class="ion-chevron-up"></i></a>

    </div>

    <?php $curr = \alphashop\App::$app->getProperty('currency'); ?>
    <script>
        var path = '<?=PATH;?>',
            course = <?=$curr['value'];?>,
            symboleLeft = '<?=$curr['symbol_left'];?>',
            symboleRight = '<?=$curr['symbol_right'];?>';
    </script>

    <script src="alphashop/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="alphashop/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="alphashop/js/vendor/popper.min.js"></script>
    <script src="alphashop/js/vendor/bootstrap.min.js"></script>
    <script src="alphashop/js/ajaxupload.js"></script>
    <script src="alphashop/js/typeahead.bundle.js"></script>

    <script src="alphashop/js/plugins/slick.min.js"></script>
    <script src="alphashop/js/plugins/jquery.barrating.min.js"></script>
    <script src="alphashop/js/plugins/jquery.counterup.js"></script>
    <script src="alphashop/js/plugins/jquery.nice-select.js"></script>
    <script src="alphashop/js/plugins/jquery.sticky-sidebar.js"></script>
    <script src="alphashop/js/plugins/jquery-ui.min.js"></script>
    <script src="alphashop/js/plugins/jquery.ui.touch-punch.min.js"></script>
    <script src="alphashop/js/plugins/theia-sticky-sidebar.min.js"></script>
    <script src="alphashop/js/plugins/waypoints.min.js"></script>
    <script src="alphashop/js/plugins/jquery.zoom.min.js"></script>
    <script src="alphashop/js/plugins/timecircles.js"></script>


    <script src="alphashop/js/app.js"></script>
    <script src="alphashop/js/main.js"></script>

</body>

</html>