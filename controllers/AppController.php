<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use yii\web\Controller;

/**
 * Description of AppController
 *
 * @author Lenovo
 */
class AppController extends Controller {
  protected function setMeta($title =null, $keywords=null, $description=null){
    $this->view->title = $title;
    $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
    $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
  }
}
