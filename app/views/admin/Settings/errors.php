<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>/settings">Настройки</a></li>
                    <li class="breadcrumb-item">Ошибки</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-0">
                    <textarea class="errors-log-content" disabled><?=is_file(ROOT . '/tmp/errors.log') ? file_get_contents(ROOT . '/tmp/errors.log') : 'Фойл очшено';?></textarea>
                </div>
                <div class="card-footer">
                    <a href="<?=ADMIN;?>/settings/errors?clear=1" class="btn btn-danger delete"><i class="ai ai-trash-outline"></i> Очистить</a>
                </div>
            </div>
        </div>
    </div>
</section>