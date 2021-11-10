<?php

namespace app\controllers\admin;


use alphashop\App;
use alphashop\libs\Pagination;

class OrderController extends AppController {

    public function indexAction(){
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getParams('pagination_adm');
        $count = \R::count('as_order');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();

        $orders = \R::getAll("SELECT `as_order`.`id`, `as_order`.`user_id`, `as_order`.`status`, `as_order`.`date`, `as_order`.`update_at`, `as_order`.`currency`, `as_user`.`name`, ROUND(SUM(`as_order_product`.`price`), 2) AS `sum` FROM `as_order`
  JOIN `as_user` ON `as_order`.`user_id` = `as_user`.`id`
  JOIN `as_order_product` ON `as_order`.`id` = `as_order_product`.`order_id`
  GROUP BY `as_order`.`id` ORDER BY `as_order`.`status`, `as_order`.`id` LIMIT $start, $perpage");

        $this->setMeta('Список заказов');
        $this->set(compact('orders', 'pagination', 'count'));
    }

    public function viewAction(){
        $order_id = $this->getRequestID();
        $order = \R::getRow("SELECT `as_order`.*, `as_user`.`name`, ROUND(SUM(`as_order_product`.`price`), 2) AS `sum` FROM `as_order`
  JOIN `as_user` ON `as_order`.`user_id` = `as_user`.`id`
  JOIN `as_order_product` ON `as_order`.`id` = `as_order_product`.`order_id`
  WHERE `as_order`.`id` = ?
  GROUP BY `as_order`.`id` ORDER BY `as_order`.`status`, `as_order`.`id` LIMIT 1", [$order_id]);
        if(!$order){
            throw new \Exception('Страница не найдена', 404);
        }
        $order_products = \R::findAll('as_order_product', "order_id = ?", [$order_id]);
        $this->setMeta("Заказ №{$order_id}");
        $this->set(compact('order', 'order_products'));
    }

    public function changeAction(){
        $order_id = $this->getRequestID();
        $status = !empty($_GET['status']) ? '1' : '0';
        $order = \R::load('as_order', $order_id);
        if(!$order){
            throw new \Exception('Страница не найдена', 404);
        }
        $order->status = $status;
        $order->update_at = date("Y-m-d H:i:s");
        \R::store($order);
        $_SESSION['success'] = 'Изменения сохранены';
        redirect();
    }

    public function deleteAction(){
        $order_id = $this->getRequestID();
        $order = \R::load('as_order', $order_id);
        \R::trash($order);
        $_SESSION['success'] = 'Заказ удален';
        redirect(ADMIN . '/order');
    }

}