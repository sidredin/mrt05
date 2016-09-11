<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
        /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
      $this->layout = 'homepage';
      return $this->render('index');
    }
}
