<?php

namespace app\controllers;

class SearchController extends AppController{

    public function typeaheadAction(){
        if($this->isAjax()){
            $query = !empty(trim($_GET['query'])) ? trim($_GET['query']) : null;
            if($query){
                $products = \R::getAll("SELECT id, title FROM as_product WHERE title LIKE ? AND status = '1' LIMIT 11", ["%{$query}%"]);
                echo json_encode($products);
            }
        }
        die;
    }

    public function indexAction(){
        $query = !empty(trim($_GET['q'])) ? trim($_GET['q']) : null;
        if($query){
            $products = \R::find('as_product', "title LIKE ? AND status = '1'", ["%{$query}%"]);
        }
        $this->setMeta('Поиск по: ' . h($query));
        $this->set(compact('products', 'query'));
    }

}