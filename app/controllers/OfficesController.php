<?php

namespace app\controllers;

use app\models\Main;
use app\models\Office;
use vendor\core\base\View;
use vendor\libs\Geo;

class OfficesController extends AppController {
    public $layout = 'main';
    public function indexAction() {
        new Office();
        $country = \R::findAll('country');
        $post_office = \R::findAll('post_office');
        View::setMeta('Офисы на карте', 'Описание страницы Офисы на карте', 'Ключевые слова Офисы на карте');
        $this->set(compact( 'post_office', 'country'));
    }
    public function geoofficeAction() {
        if ($this->isAjax()) {
            $model = new Office();
            $country = \R::findOne('country', "id = {$_POST['id']}");
            $this->loadView('geojson', compact('country'));
            die();
        }
        $this->layout = 'geo';
        new Office();
        $country = \R::findAll('country');
        View::setMeta('Офис на карте', 'Описание страницы Офиса на карте', 'Ключевые слова Офиса на карте');
        $this->set(compact( 'country'));
    }
}