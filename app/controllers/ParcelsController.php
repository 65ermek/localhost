<?php

namespace app\controllers;


use app\models\Main;
use vendor\core\base\View;

class ParcelsController extends AppController {

    public $layout = 'default';
    public function indexAction() {

    }
    public function addAction() {
        new Main();
        $langs = \R::findAll('country');
        $parcels = \R::findAll('parcels');
        View::setMeta('Добавление посылки', 'Описание страницы Добавление посылки', 'Ключевые слова Добавление посылки');
        $this->set(compact( 'langs', 'parcels'));
    }
    public function editAction() {

    }
}