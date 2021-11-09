<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/admin-v3/">
    <link rel="shortcut icon" href="<?=PATH;?>/images/favicon/favicon.png" type="image/png" />
    <?=$this->getMeta();?>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/alphaicons/style.css">
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="my.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/alphashop.svg" alt="AdminLTELogo" height="120" width="120">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item">
                <h3 class="m-1" id="doshboardPageTitle">{alphastore:page_title}</h3>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <img src="dist/img/user8-128x128.jpg" class="user-image img-circle elevation-2" height="30" alt="<?=$_SESSION['user']['name'];?>">
                    <span class="d-none d-md-inline"><?=$_SESSION['user']['name'];?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right card-widget widget-user-2">
                    <div class="widget-user-header bg-gradient-primary">
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="dist/img/user8-128x128.jpg" alt="User Avatar">
                        </div>
                        <!-- /.widget-user-image -->
                        <h4 class="widget-user-username"><?=$_SESSION['user']['name'];?></h4>
                        <p class="widget-user-desc"><?=$_SESSION['user']['email'];?></p>
                    </div>
                    <div class="d-hr"></div>
                    <div class="user-menu-footer">
                        <a href="<?=ADMIN;?>/user/edit?id=<?=$_SESSION['user']['id'];?>" class="dropdown-item btn btn-light"><i class="ai ai-person-outline"></i> Профиль</a>
                        <a href="<?=ADMIN;?>/settings" class="dropdown-item btn btn-light"><i class="ai ai-settings-outline"></i> Настройки</a>
                        <a href="<?=PATH;?>" class="dropdown-item btn btn-light" target="_blank"><i class="ai ai-open-outline"></i> Просмотр</a>
                        <a href="https://alphacom.uz/support/alphashop/v1-5-0" class="dropdown-item btn btn-light"><i class="ai ai-help-circle-outline"></i> Помощь</a>
                        <div class="d-hr"></div>
                        <a href="<?=PATH;?>/user/logout" class="dropdown-item btn btn-light text-danger"><i class="ai ai-log-out-outline"></i> Вход</a>
                    </div>

                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="<?=ADMIN;?>" class="brand-link">
            <img src="dist/img/alphashop.svg" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
            <span class="brand-text font-weight-light">Alpha Shop Admin</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="<?= ADMIN ?>" class="nav-link">
                            <i class="nav-icon ai ai-home"></i>
                            <p>
                                Главное
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= ADMIN ?>/order" class="nav-link">
                            <i class="nav-icon ai ai-bag"></i>
                            <p>
                                Заказы
                                <?php if(\R::count('order', "status = '0'")): ?>
                                <span class="right badge badge-danger"><?=\R::count('order', "status = '0'");?></span>
                                <?php endif; ?>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= ADMIN ?>/category" class="nav-link">
                            <i class="nav-icon ai ai-layers"></i>
                            <p>
                                Категории
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= ADMIN ?>/product" class="nav-link">
                            <i class="nav-icon ai ai-library"></i>
                            <p>
                                Товары
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= ADMIN ?>/user" class="nav-link">
                            <i class="nav-icon ai ai-person"></i>
                            <p>
                                Пользователи
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= ADMIN ?>/currency" class="nav-link">
                            <i class="nav-icon ai ai-logo-usd"></i>
                            <p>
                                Валюты
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon ai ai-filter"></i>
                            <p>
                                Фильтры
                                <i class="right ai ai-chevron-back"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= ADMIN ?>/filter/attribute-group" class="nav-link">
                                    <i class="ai ai-radio-button-off nav-icon"></i>
                                    <p>Группы фильтров</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= ADMIN ?>/filter/attribute" class="nav-link">
                                    <i class="ai ai-radio-button-off nav-icon"></i>
                                    <p>Фильтры</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon ai ai-settings"></i>
                            <p>
                                Настройки
                                <i class="right ai ai-chevron-back"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= ADMIN ?>/settings" class="nav-link">
                                    <i class="ai ai-radio-button-off nav-icon"></i>
                                    <p>Основные</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= ADMIN ?>/settings/errors" class="nav-link">
                                    <i class="ai ai-radio-button-off nav-icon"></i>
                                    <p>Ошибки сайьа</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?= ADMIN ?>/about" class="nav-link">
                            <i class="nav-icon ai ai-information-circle"></i>
                            <p>
                                О Приложении
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <div class="content-wrapper">

        <?=$content;?>

    </div>

    <footer class="main-footer text-sm">
        <strong>Copyright &copy; 2021 <a href="https://alphacom.uz">AlphaCom, Inc</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.5.0
        </div>
    </footer>

</div>

<script>
var path = '<?=PATH;?>',
        adminpath = '<?=ADMIN;?>';
</script>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="/js/ajaxupload.js"></script>
<script src="/js/validator.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="plugins/select2/js/select2.full.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/jquery.inputmask.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="my.js"></script>


<script>
    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        <?php if(isset($_SESSION['success'])): ?>
            Toast.fire({
                icon: 'success',
                title: '<?php echo $_SESSION['success']; unset($_SESSION['success']); ?>'
            })
        <?php endif;?>
        <?php if(isset($_SESSION['info'])): ?>
            Toast.fire({
                icon: 'info',
                title: '<?php echo $_SESSION['info']; unset($_SESSION['info']); ?>'
            })
        <?php endif;?>
        <?php if(isset($_SESSION['error'])): ?>
            Toast.fire({
                icon: 'error',
                title: '<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>'
            })
        <?php endif;?>
        <?php if(isset($_SESSION['warning'])): ?>
            Toast.fire({
                icon: 'warning',
                title: '<?php echo $_SESSION['warning']; unset($_SESSION['warning']); ?>'
            })
        <?php endif;?>
        <?php if(isset($_SESSION['question'])): ?>
            Toast.fire({
                icon: 'question',
                title: '<?php echo $_SESSION['question']; unset($_SESSION['question']); ?>'
            })
        <?php endif;?>
    });
</script>



</body>
</html>
