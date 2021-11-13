<?php

namespace app\controllers\admin;

use alphashop\App;
use alphashop\libs\Pagination;
use app\models\admin\Blog;
use app\models\AppModel;

class BlogController extends AppController {

    public function indexAction() {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getParams('pagination_adm');
        $count = \R::count('as_blog');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $posts = \R::getAll("SELECT * FROM as_blog ORDER BY id DESC LIMIT $start, $perpage");
        $this->setMeta('Блог посты');
        $this->set(compact('posts', 'pagination', 'count'));
    }

    public function blogImgAction(){
        if(isset($_GET['upload'])){
            $wmax = App::$app->getParams('blog_width');
            $hmax = App::$app->getParams('blog_height');
            $name = $_POST['name'];
            $product = new Blog();
            $product->uploadImg($name, $wmax, $hmax);
        }
    }

    public function addAction() {
        $this->setMeta('Добавить пост');
    }

    public function editAction() {
        $imgSize = App::$app->getParams('blog_width') . "x" . App::$app->getParams('blog_height');
        if(!empty($_POST)){
            $id = $this->getRequestID(false);
            $post = new Blog();
            $data = $_POST;
            $post->load($data);
            $post->attributes['status'] = $post->attributes['status'] ? '1' : '0';
            $post->getImg();
            if(!$post->validate($data)){
                $post->getErrors();
                redirect();
            }
            if($post->update('as_blog', $id)){
                $alias = AppModel::createAlias('as_blog', 'alias', $data['title'], $id);
                $post = \R::load('as_blog', $id);
                $post->alias = $alias;
                \R::store($post);
                $_SESSION['success'] = 'Изменения сохранены';
            }
            redirect();
        }
        $id = $this->getRequestID();
        $post = \R::load('as_blog', $id);
        $this->setMeta("{$post->title}");
        $this->set(compact('post', 'imgSize'));
    }

}