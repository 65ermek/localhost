<?php

namespace app\controllers;

use vendor\core\base\Controller;

class Pages extends Controller {
    public function viewAction() {
        debug($this->route);
        debug($_GET);
        echo $_GET['var1'];
        echo 'Pages::view';
    }
}