<?php

namespace app\controllers;


use app\models\Main;

class MainController extends AppController {

    public $layout = 'main';
    public function indexAction() {
        $model = new Main();
        $langs = $model->findAll();
//        $lang = $model->findOne(5);
//        $data = $model->findBySql("SELECT * FROM {$model->table} WHERE country_name LIKE ?", ['%а%']);
//        debug($data);
//        $data = $model->findLike('я', 'country_name');
//        debug($data);
        $title = 'Главная страница';
        $this->set(compact('title', 'langs'));
    }
}