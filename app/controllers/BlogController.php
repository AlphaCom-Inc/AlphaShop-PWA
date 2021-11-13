<?php

namespace app\controllers;

use alphashop\App;
use alphashop\libs\Pagination;

class BlogController extends AppController {

    public function indexAction() {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getParams('pagination');
        $count = \R::count('as_blog', "status = '1'");
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();
        $posts = \R::find('as_blog', "status = '1' ORDER BY id DESC LIMIT $start, $perpage");

        $this->setMeta('Продукты');
        $this->set(compact('posts', 'pagination', 'count'));
    }

    public function postAction(){
        $alias = $this->route['alias'];
        $post = \R::findOne('as_blog', "alias = ? AND status = '1'", [$alias]);
        if(!$post){
            throw new \Exception('Пост не найден', 404);
        }

        $this->setMeta($post->title, $post->description, $post->keywords);
        $this->set(compact('post'));
    }
}