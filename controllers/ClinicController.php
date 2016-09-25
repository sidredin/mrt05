<?php

namespace app\controllers;

use app\models\Clinics;

class ClinicController extends AppController
{
  public function actionView($id){
    $clinic = Clinics::findOne($id);
    if(empty($clinic))
        throw new \yii\web\HttpException(404, 'Вы прошли по несуществующему адресу. Возможно, страница была удалена');
    // debug($clinic);
    $city = $clinic->city;
    $keywords = $clinic->name.', '.$city->name.', МРТ, КТ';
    $this->setMeta($clinic->name, $keywords, $clinic->meta_description);
    
    return $this->render('view', compact('clinic'));
  }
}
