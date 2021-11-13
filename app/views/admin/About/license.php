<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>/about">О Приложении</a></li>
                    <li class="breadcrumb-item">Лицензионное соглашения</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="card">
        <div class="card-body">
            <?=nl2br(file_get_contents(ROOT . '/LICENSE'));?>
        </div>
    </div>
</section>