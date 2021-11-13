<?php

namespace app\controllers;

use alphashop\App;
use alphashop\Cache;

class MainController extends AppController {

    public function indexAction(){
        $brands = \R::find('as_brand', 'LIMIT 3');
        $hits = \R::find('as_product', "hit = '1' AND status = '1' LIMIT 8");
        $newProducts = \R::find('as_product', "status = '1' ORDER BY id DESC LIMIT 6");
        $desc = App::$app->getParams('description');
        $keywords = App::$app->getParams('keywords');
        $this->setMeta('Главная страница', $desc, $keywords);
        $this->set(compact('brands', 'hits', 'newProducts'));
    }

}