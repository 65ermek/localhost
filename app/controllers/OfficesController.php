<?php

namespace app\controllers;

use app\models\Office;

class OfficesController extends AppController {
    public $layout = 'main';
    public function indexAction() {
        new Office();
        $country = \R::findAll('country');
        $post_office = \R::findAll('post_office');
        $this->setMeta('Офисы на карте', 'Описание страницы', 'Ключевые слова');
        $meta = $this->meta;
        $this->set(compact('meta', 'post_office', 'country'));
    }
}