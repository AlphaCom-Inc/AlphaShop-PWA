<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item">Список категорий</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="<?=ADMIN;?>/category/add" class="float-sm-right btn btn-sm btn-primary"><i class="ai ai-add"></i> Добавить</a>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card category-card-app">
                <div class="card-body p-0">
                    <?php new \app\widgets\menu\Menu([
                        'tpl' => WWW . '/menu/category_admin.php',
                        'container' => 'div',
                        'cache' => 0,
                        'cacheKey' => 'admin_cat',
                        'class' => 'list-group list-group-root well',
                    ]) ?>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->