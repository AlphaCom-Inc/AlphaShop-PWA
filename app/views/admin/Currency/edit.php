<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>">Главное</a></li>
                    <li class="breadcrumb-item"><a href="<?=ADMIN;?>/currency">Список валют</a></li>
                    <li class="breadcrumb-item"><?=$currency->title ?></li>
                </ol>
            </div>
            <div class="col-sm-6">
                <a href="<?=ADMIN;?>/currency" class="float-sm-right btn btn-sm btn-danger"><i class="ai ai-close"></i> Отменить</a>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form method="post" action="<?= ADMIN ?>/currency/edit" role="form" data-toggle="validator">
                    <div class="card-body">
                        <div class="form-group has-feedback">
                            <label for="title">Наименование валюты</label>
                            <input type="text" name="title" class="form-control" id="title" placeholder="Наименование валюты" required value="<?= h($currency->title) ?>">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="code">Код валюты</label>
                            <input type="text" name="code" class="form-control" id="code" placeholder="Код валюты" required value="<?= h($currency->code) ?>">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="symbol_left">Символ слева</label>
                            <input type="text" name="symbol_left" class="form-control" id="symbol_left" placeholder="Символ слева" value="<?= h($currency->symbol_left) ?>">
                        </div>
                        <div class="form-group">
                            <label for="symbol_right">Символ справа</label>
                            <input type="text" name="symbol_right" class="form-control" id="symbol_right" placeholder="Символ справа" value="<?= h($currency->symbol_right) ?>">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="value">Значение</label>
                            <input type="text" name="value" class="form-control" id="value" placeholder="Значение" pattern="^[0-9.]{1,}$" required data-error="Допускаются цифры и десятичная точка" value="<?= $currency->value ?>">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="base" id="base" <?php if($currency->base) echo 'checked' ?>>
                            <label for="base" class="custom-control-label">Базовая валюта</label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="id" value="<?= $currency->id ?>">
                        <button type="submit" class="btn btn-primary"><i class="ai ai-save-outline"></i> Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
