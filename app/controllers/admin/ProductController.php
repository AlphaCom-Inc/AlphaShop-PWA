<?php

namespace app\controllers\admin;

use app\models\admin\Product;
use app\models\AppModel;
use alphashop\App;
use alphashop\libs\Pagination;

class ProductController extends AppController {

    public function indexAction(){
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getParams('pagination_adm');
        $count = \R::count('as_product');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $products = \R::getAll("SELECT as_product.*, as_category.title AS cat FROM as_product JOIN as_category ON as_category.id = as_product.category_id ORDER BY as_product.title LIMIT $start, $perpage");
        $this->set(compact('products', 'pagination', 'count'));
        $this->setMeta('Список товаров');
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

    public function editAction(){
        $recSingle = App::$app->getParams('img_width') . "x" . App::$app->getParams('img_height');
        $recMulti = App::$app->getParams('gallery_width') . "x" . App::$app->getParams('gallery_height');
        if(!empty($_POST)){
            $id = $this->getRequestID(false);
            $product = new Product();
            $data = $_POST;
            $product->load($data);
            $product->attributes['status'] = $product->attributes['status'] ? '1' : '0';
            $product->attributes['hit'] = $product->attributes['hit'] ? '1' : '0';
            $product->getImg();
            if(!$product->validate($data)){
                $product->getErrors();
                redirect();
            }
            if($product->update('as_product', $id)){
                $product->editFilter($id, $data);
                $product->editRelatedProduct($id, $data);
                $product->saveGallery($id);
                $alias = AppModel::createAlias('as_product', 'alias', $data['title'], $id);
                $product = \R::load('as_product', $id);
                $product->alias = $alias;
                \R::store($product);
                $_SESSION['success'] = 'Изменения сохранены';
                redirect();
            }
        }

        $id = $this->getRequestID();
        $product = \R::load('as_product', $id);
        App::$app->setProperty('parent_id', $product->category_id);
        $filter = \R::getCol('SELECT attr_id FROM as_attribute_product WHERE product_id = ?', [$id]);
        $related_product = \R::getAll("SELECT as_related_product.related_id, as_product.title FROM as_related_product JOIN as_product ON as_product.id = as_related_product.related_id WHERE as_related_product.product_id = ?", [$id]);
        $gallery = \R::getCol('SELECT img FROM as_gallery WHERE product_id = ?', [$id]);
        $this->setMeta("Редактирование товара");
        $this->set(compact('product', 'filter', 'related_product', 'gallery', 'recSingle', 'recMulti'));
    }

    public function addAction(){
        $recSingle = App::$app->getParams('img_width') . "x" . App::$app->getParams('img_height');
        $recMulti = App::$app->getParams('gallery_width') . "x" . App::$app->getParams('gallery_height');
        if(!empty($_POST)){
            $product = new Product();
            $data = $_POST;
            $product->load($data);
            $product->attributes['status'] = $product->attributes['status'] ? '1' : '0';
            $product->attributes['hit'] = $product->attributes['hit'] ? '1' : '0';
            $product->getImg();

            if(!$product->validate($data)){
                $product->getErrors();
                $_SESSION['form_data'] = $data;
                redirect();
            }

            if($id = $product->save('as_product')){
                $product->saveGallery($id);
                $alias = AppModel::createAlias('as_product', 'alias', $data['title'], $id);
                $p = \R::load('as_product', $id);
                $p->alias = $alias;
                \R::store($p);
                $product->editFilter($id, $data);
                $product->editRelatedProduct($id, $data);
                $_SESSION['success'] = 'Товар добавлен';
            }
            redirect();
        }

        $this->setMeta('Новый товар');
        $this->set(compact('recSingle', 'recMulti'));
    }

    public function relatedProductAction(){
        /*$data = [
            'items' => [
                [
                    'id' => 1,
                    'text' => 'Товар 1',
                ],
                [
                    'id' => 2,
                    'text' => 'Товар 2',
                ],
            ]
        ];*/

        $q = isset($_GET['q']) ? $_GET['q'] : '';
        $data['items'] = [];
        $products = \R::getAssoc('SELECT id, title FROM as_product WHERE title LIKE ? LIMIT 10', ["%{$q}%"]);
        if($products){
            $i = 0;
            foreach($products as $id => $title){
                $data['items'][$i]['id'] = $id;
                $data['items'][$i]['text'] = $title;
                $i++;
            }
        }
        echo json_encode($data);
        die;
    }

    public function deleteGalleryAction(){
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $src = isset($_POST['src']) ? $_POST['src'] : null;
        if(!$id || !$src){
            return;
        }
        if(\R::exec("DELETE FROM as_gallery WHERE product_id = ? AND img = ?", [$id, $src])){
            @unlink(WWW . "/images/product/$src");
            exit('1');
        }
        return;
    }

}