<?php

namespace app\controllers\admin;

class  MainController extends AppController {

    public function indexAction(){
        $countNewOrders = \R::count('as_order', "status = '0'");
        $countUsers = \R::count('as_user');
        $countProducts = \R::count('as_product', "status = '1'");
        $countCurrency = \R::count('as_currency');

        $orders = \R::getAll("SELECT `as_order`.`id`, `as_order`.`user_id`, `as_order`.`status`, `as_order`.`date`, `as_order`.`update_at`, `as_order`.`currency`, `as_user`.`name`, ROUND(SUM(`as_order_product`.`price`), 2) AS `sum` FROM `as_order`
  JOIN `as_user` ON `as_order`.`user_id` = `as_user`.`id`
  JOIN `as_order_product` ON `as_order`.`id` = `as_order_product`.`order_id`
  GROUP BY `as_order`.`id` ORDER BY `as_order`.`status`, `as_order`.`id` DESC LIMIT 5");

        $this->setMeta('Панель управления');
        $this->set(compact('countNewOrders', 'countCurrency', 'countProducts', 'countUsers', 'orders'));
    }

}