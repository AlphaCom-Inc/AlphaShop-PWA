<?php

namespace app\controllers\admin;

use app\models\User;
use alphashop\App;
use alphashop\libs\Pagination;

class UserController extends AppController {

    public function indexAction(){
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getParams('pagination_adm');
        $count = \R::count('as_user');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $users = \R::findAll('as_user', "LIMIT $start, $perpage");
        $this->setMeta('Список пользователей');
        $this->set(compact('users', 'pagination', 'count'));
    }

    public function addAction(){
        $this->setMeta('Новый пользователь');
    }

    public function editAction(){
        if(!empty($_POST)){
            $id = $this->getRequestID(false);
            $user = new \app\models\admin\User();
            $data = $_POST;
            $user->load($data);
            if(!$user->attributes['password']){
                unset($user->attributes['password']);
            }else{
                $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
            }
            if(!$user->validate($data) || !$user->checkUnique()){
                $user->getErrors();
                redirect();
            }
            if($user->update('as_user', $id)){
                $_SESSION['success'] = 'Изменения сохранены';
            }
            redirect();
        }

        $user_id = $this->getRequestID();
        $user = \R::load('as_user', $user_id);

        $orders = \R::getAll("SELECT `as_order`.`id`, `as_order`.`user_id`, `as_order`.`status`, `as_order`.`date`, `as_order`.`update_at`, `as_order`.`currency`, ROUND(SUM(`as_order_product`.`price`), 2) AS `sum` FROM `as_order`
  JOIN `as_order_product` ON `as_order`.`id` = `as_order_product`.`order_id`
  WHERE user_id = {$user_id} GROUP BY `as_order`.`id` ORDER BY `as_order`.`status`, `as_order`.`id`");

        $this->setMeta('Редактирование профиля пользователя');
        $this->set(compact('user', 'orders'));
    }

    public function authAction(){
        if(!empty($_POST)){
            $user = new User();
            if(!$user->login(true)){
                $_SESSION['error'] = 'Логин/пароль введены неверно';
            }
            if(User::isAdmin()){
                redirect(ADMIN);
            }else{
                redirect();
            }
        }
        $this->layout = 'login';
    }

    public function recoverAction() {
        $this->layout = 'login';



        $this->setMeta('Востановления пароля');
    }

}