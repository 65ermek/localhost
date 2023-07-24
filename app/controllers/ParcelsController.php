<?php

namespace app\controllers;


use app\models\Parcels;
use vendor\core\base\View;

class ParcelsController extends AppController {

    public $layout = 'default';
    public function indexAction() {

    }
    public function addAction() {
        new Parcels();
        $langs = \R::findAll('country');
        View::setMeta('Добавление посылки', 'Описание страницы: Добавление посылки', 'Ключевые слова: Добавление посылки');
        $this->set(compact( 'langs' ));
    }
    public function editAction() {

    }
}