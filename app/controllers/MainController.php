<?php

namespace app\controllers;

use alphashop\App;
use alphashop\Cache;

class MainController extends AppController {

    public function indexAction(){
        $brands = \R::find('as_brand', 'LIMIT 3');
        $hits = \R::find('as_product', "hit = '1' AND status = '1' LIMIT 8");
        $favicon = App::$app->getParams('favicon');
        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
        $this->set(compact('brands', 'hits', 'favicon'));
    }

}