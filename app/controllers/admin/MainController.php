<?php

namespace app\controllers\admin;

class MainController extends AppController {

    public function indexAction(){
        $countNewOrders = \R::count('order', "status = '0'");
        $countUsers = \R::count('user');
        $countProducts = \R::count('product', "status = '1'");
        $countCurrency = \R::count('currency');

        $orders = \R::getAll("SELECT `order`.`id`, `order`.`user_id`, `order`.`status`, `order`.`date`, `order`.`update_at`, `order`.`currency`, `user`.`name`, ROUND(SUM(`order_product`.`price`), 2) AS `sum` FROM `order`
  JOIN `user` ON `order`.`user_id` = `user`.`id`
  JOIN `order_product` ON `order`.`id` = `order_product`.`order_id`
  GROUP BY `order`.`id` ORDER BY `order`.`status`, `order`.`id` LIMIT 5");

        $this->setMeta('Панель управления');
        $this->set(compact('countNewOrders', 'countCurrency', 'countProducts', 'countUsers', 'orders'));
    }

}