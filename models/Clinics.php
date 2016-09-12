<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;
use yii\db\ActiveRecord;

/**
 * Description of Cities
 *
 * @author Lenovo
 */
class Clinics extends ActiveRecord {
  
  public function getCities(){
    return $this->hasOne(Cities::className(), ['id'=>'city_id']);
  }
  
}
