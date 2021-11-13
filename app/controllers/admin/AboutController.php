<?php

namespace app\controllers\admin;

class AboutController extends AppController {

    public function indexAction() {
        $this->setMeta('О Приложении');
    }

    public function licenseAction() {
        $this->setMeta('Лицензионное соглашения');
    }

}