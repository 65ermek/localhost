<?php

namespace app\controllers;


use app\models\Main;
use vendor\core\App;
use vendor\core\base\View;

class MainController extends AppController {

    public $layout = 'main';
    public function indexAction() {
        new Main();
        $langs = \R::findAll('country');
        $post_office = \R::findAll('post_office');
        View::setMeta('Главная страница', 'Описание страницы', 'Ключевые слова');
        $this->set(compact( 'langs', 'post_office'));
    }

}