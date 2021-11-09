<?php

namespace app\controllers\admin;

use app\models\AppModel;
use app\models\User;
use alphashop\base\Controller;

class AppController extends Controller {

    public $layout = 'admin-v3';

    public function __construct($route){
        parent::__construct($route);
        if(!User::isAdmin() && $route['action'] != 'auth' && $route['action'] != 'recover'){
            redirect(ADMIN . '/user/auth'); // UserController::loginAdminAction
        }
        new AppModel();
    }

    public function getRequestID($get = true, $id = 'id'){
        if($get){
            $data = $_GET;
        }else{
            $data = $_POST;
        }
        $id = !empty($data[$id]) ? (int)$data[$id] : null;
        if(!$id){
            throw new \Exception('Страница не найдена', 404);
        }
        return $id;
    }

}