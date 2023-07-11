<?php

namespace app\controllers;

use vendor\core\base\Controller;

class AppController extends Controller {
    public array $meta = [];
    protected function setMeta($title = '', $desc = '', $keywords = '') {
        $this->meta['title'] = $title;
        $this->meta['desc'] = $desc;
        $this->meta['keywords'] = $keywords;
    }
}