<?php

namespace app\controllers\admin;

use alphashop\App;
use app\models\admin\Product;

class SettingsController extends AppController {

    public function indexAction() {
        $this->setMeta('Настройки');
    }

    public function errorsAction() {
        if (!empty($_GET['clear'])) {
            unlink(ROOT . '/tmp/errors.log');
            $_SESSION['success'] = 'Фойл очишен';
            redirect();
        }
        $this->setMeta('Ошибки сайта');
    }

    public function addImageAction(){
        if(isset($_GET['upload'])){
            if($_POST['name'] == 'single'){
                $wmax = App::$app->getParams('img_width');
                $hmax = App::$app->getParams('img_height');
            }else{
                $wmax = App::$app->getParams('gallery_width');
                $hmax = App::$app->getParams('gallery_height');
            }
            $name = $_POST['name'];
            $product = new Product();
            $product->uploadImg($name, $wmax, $hmax);
        }
    }

}