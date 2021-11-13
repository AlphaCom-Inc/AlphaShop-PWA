<?php

namespace app\controllers\admin;

use app\models\AppModel;
use app\models\Category;
use alphashop\App;

class CategoryController extends AppController {

    public function indexAction(){
        $this->setMeta('Список категорий');
    }

    public function deleteAction(){
        $id = $this->getRequestID();
        $children = \R::count('as_category', 'parent_id = ?', [$id]);
        $errors = '';
        if($children){
            $errors .= '<p>Удаление невозможно, в категории есть вложенные категории</p>';
        }
        $products = \R::count('as_product', 'category_id = ?', [$id]);
        if($products){
            $errors .= '<p>Удаление невозможно, в категории есть товары</p>';
        }
        if($errors){
            $_SESSION['error'] = "$errors";
            redirect();
        }
        $category = \R::load('as_category', $id);
        \R::trash($category);
        $_SESSION['success'] = 'Категория удалена';
        redirect();
    }

    public function addAction(){
        if(!empty($_POST)){
            $category = new Category();
            $data = $_POST;
            $category->load($data);
            if(!$category->validate($data)){
                $category->getErrors();
                redirect();
            }
            if($id = $category->save('as_category')){
                $alias = AppModel::createAlias('as_category', 'alias', $data['title'], $id);
                $cat = \R::load('as_category', $id);
                $cat->alias = $alias;
                \R::store($cat);
                $_SESSION['success'] = 'Категория добавлена';
            }
            redirect();
        }
        $this->setMeta('Новая категория');
    }

    public function editAction(){
        if(!empty($_POST)){
            $id = $this->getRequestID(false);
            $category = new Category();
            $data = $_POST;
            $category->load($data);
            if(!$category->validate($data)){
                $category->getErrors();
                redirect();
            }
            if($category->update('as_category', $id)){
                $alias = AppModel::createAlias('as_category', 'alias', $data['title'], $id);
                $category = \R::load('as_category', $id);
                $category->alias = $alias;
                \R::store($category);
                $_SESSION['success'] = 'Изменения сохранены';
            }
            redirect();
        }
        $id = $this->getRequestID();
        $category = \R::load('as_category', $id);
        App::$app->setProperty('parent_id', $category->parent_id);
        $this->setMeta("Редактирование категории {$category->title}");
        $this->set(compact('category'));
    }

}