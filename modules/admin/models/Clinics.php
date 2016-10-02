<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "clinics".
 *
 * @property string $id
 * @property string $city_id
 * @property string $name
 * @property string $logo
 * @property string $price_mrt
 * @property string $price_kt
 * @property string $description
 * @property string $phone
 * @property string $email
 * @property string $site
 * @property string $address
 * @property string $lat
 * @property string $lng
 * @property string $working_hours
 * @property integer $around_the_clock
 * @property integer $tesla_1_5
 * @property integer $private_property
 * @property integer $mrt
 * @property string $mrt_model
 * @property integer $mrt_min
 * @property integer $kt
 * @property string $kt_model
 * @property integer $kt_min
 * @property integer $for_children
 * @property integer $free_concult
 * @property integer $clinics_network
 * @property integer $open_tomograph
 * @property string $meta_description
 */
class Clinics extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clinics';
    }

    public function getCity(){
        return $this->hasOne(Cities::className(), ['id'=>'city_id']);
      }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city_id', 'name', 'phone', 'address', 'working_hours','lat', 'lng'], 'required'],
            [['city_id', 'around_the_clock', 'tesla_1_5', 'private_property', 'mrt', 'mrt_min', 'kt', 'kt_min', 'for_children', 'free_concult', 'clinics_network', 'open_tomograph'], 'integer'],
            [['price_mrt', 'price_kt', 'description', 'logo'], 'string'],
            [['name', 'phone', 'address', 'working_hours', 'mrt_model', 'kt_model', 'meta_description',], 'string', 'max' => 255],
            [['email', 'site'], 'string', 'max' => 50],
            [['lat', 'lng'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID клиники',
            'city_id' => 'Город',
            'name' => 'Название клиники',
            'logo'=> 'Логотип',
            'price_mrt' => 'Цены на МРТ',
            'price_kt' => 'Цены на КТ',
            'description' => 'Описание клиники',
            'phone' => 'Телефон',
            'email' => 'E-mail',
            'site' => 'Сайт',
            'address' => 'Адрес',
            'lat' => 'Широта',
            'lng' => 'Долгота',
            'working_hours' => 'График работы',
            'around_the_clock' => 'Круглосуточно',
            'tesla_1_5' => 'Тесла 1,5',
            'private_property' => 'Частная клиника',
            'mrt' => 'МРТ',
            'mrt_model' => 'Модель МРТ',
            'mrt_min' => 'Минимальная цена на МРТ',
            'kt' => 'КТ',
            'kt_model' => 'Модель КТ',
            'kt_min' => 'Минимальная цена на КТ',
            'for_children' => 'Для детей',
            'free_concult' => 'Бесплатная консультация',
            'clinics_network' => 'Сеть клиник',
            'open_tomograph' => 'Открытый томограф',
            'meta_description' => 'Мета-описание (для SEO)',
        ];
    }
}
