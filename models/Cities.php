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
class Cities extends ActiveRecord {
  
  public function getClinics(){
    return $this->hasMany(Clinics::className(), ['city_id'=>'id']);
  }
  
}
