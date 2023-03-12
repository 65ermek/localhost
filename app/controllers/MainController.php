<?php

namespace app\controllers;


use app\models\Main;
use vendor\core\App;

class MainController extends AppController {

    public $layout = 'main';
    public function indexAction() {
        App::$app->getList();
        new Main();
        $langs = \R::findAll('country');
        $post_office = \R::findAll('post_office');
        $this->setMeta('Главная страница', 'Описание страницы', 'Ключевые слова');
        $meta = $this->meta;
        $this->set(compact( 'langs', 'post_office', 'meta'));
    }
}