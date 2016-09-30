<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "cities".
 *
 * @property string $id
 * @property string $name
 * @property string $alias
 * @property string $lat
 * @property string $lng
 * @property integer $zoom
 */
class Cities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cities';
    }

    public function getClinics(){
        return $this->hasMany(Clinics::className(), ['city_id'=>'id']);
      }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'alias', 'lat', 'lng'], 'required'],
            [['zoom'], 'integer'],
            [['name', 'alias'], 'string', 'max' => 25],
            [['lat', 'lng'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'alias' => 'Alias',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'zoom' => 'Zoom',
        ];
    }
}
