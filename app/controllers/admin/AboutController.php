<?php

namespace app\controllers\admin;

class AboutController extends AppController {

    public function indexAction() {
        $this->setMeta('О Приложении');
    }

}