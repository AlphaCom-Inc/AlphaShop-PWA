<!doctype html>
<html class="no-js" lang="en">

<head>
    <base href="<?=PATH;?>/">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $errstr ?></title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon/error.png">

    <link rel="stylesheet" href="alphashop/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="alphashop/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="alphashop/css/vendor/fontawesome-stars.min.css">
    <link rel="stylesheet" href="alphashop/css/vendor/ion-fonts.css">
    <link rel="stylesheet" href="alphashop/css/style.css">

</head>

<body class="template-color-2">

<div class="main-wrapper">

    <div class="loading">
        <div class="text-center middle">
                <span class="loader">
            <span class="loader-inner"></span>
                </span>
        </div>
    </div>

    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2><?= $errstr ?></h2>
                <ul>
                    <li><a href="<?=PATH?>">Главное</a></li>
                    <li class="active">Ошибка 404</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="error-content_wrapper">
        <div class="error-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 text-center">
                        <div class="error">
                            <h1>404</h1>
                            <h2>УППС! КАНОЕ СТРАНИТЦА НЕ СУШЕСТВУЕТ</h2>
                            <p>Простите, но мы не смогли найти такую странитцу. <br>
                                Возможно странитцу отключили или такое странитца не сушествует</p>
                            <form action="search" class="searchform mb--50">
                                <input type="text" name="q" id="error_search" placeholder="Поиск..." class="searchform__input">
                                <button type="submit" class="searchform__submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                            <a href="index.html" class="btn">Back to home page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a class="scroll-to-top" href=""><i class="ion-chevron-up"></i></a>

</div>

<script src="alphashop/js/vendor/jquery-1.12.4.min.js"></script>
<script src="alphashop/js/vendor/modernizr-2.8.3.min.js"></script>
<script src="alphashop/js/vendor/popper.min.js"></script>
<script src="alphashop/js/vendor/bootstrap.min.js"></script>

<script src="alphashop/js/main.js"></script>

</body>

</html>