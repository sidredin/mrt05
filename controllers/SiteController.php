<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Cities;
use app\models\Clinics;
use yii\data\Pagination;

class SiteController extends AppController
{
        /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
      $query = Clinics::find()->select(['id','city_id','name','phone','address','coords','working_hours','tesla_1_5','private_property','mrt','mrt_min','kt','kt_min','for_children','free_concult','clinics_network',])->with('city');
      $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 20, 'forcePageParam' => false, 'pageSizeParam' => false,]);
      $clinics = $query->offset($pages->offset)
          ->limit($pages->limit)
          ->all();
      $this->setMeta('Полный каталог клиник МРТ и КТ', Yii::$app->params['keywords'], Yii::$app->params['description']);
      return $this->render('index', compact('pages', 'clinics'));
    }
    public function actionCities()
    {
      $alias = Yii::$app->request->get('alias')?Yii::$app->request->get('alias'):'makhachkala';
      $city = Cities::findOne(['alias'=>$alias]);
      if(empty($city))
        throw new \yii\web\HttpException(404, 'Такой категории нет');
      $query = Clinics::find()->where(['city_id'=>$city->id])->select(['id','city_id','name','phone','address','coords','working_hours','tesla_1_5','private_property','mrt','mrt_min','kt','kt_min','for_children','free_concult','clinics_network',]);
      $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 20, 'forcePageParam' => false, 'pageSizeParam' => false,]);
      $clinics = $query->offset($pages->offset)
          ->limit($pages->limit)
          ->all();
      $this->setMeta($city->name.': Полный каталог клиник МРТ и КТ', $city->keywords, $city->description);
      return $this->render('cities', compact('pages', 'clinics', 'city'));
    }
}
