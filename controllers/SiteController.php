<?php

namespace app\controllers;

use Yii;
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
      $query = Clinics::find()->select(['id','city_id','name','phone','address','lat','lng','working_hours','tesla_1_5','private_property','mrt','mrt_min','kt','kt_min','for_children','free_concult','clinics_network',])->with('city');
      $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 20, 'forcePageParam' => false, 'pageSizeParam' => false,]);
      $clinics = $query->offset($pages->offset)
          ->limit($pages->limit)
          ->all();
      $this->setMeta(Yii::$app->params['siteName'], Yii::$app->params['keywords'], Yii::$app->params['description']);
      return $this->render('index', compact('pages', 'clinics'));
    }
    public function actionCities()
    {
      $alias = Yii::$app->request->get('alias')?Yii::$app->request->get('alias'):'makhachkala';
      $city = Cities::findOne(['alias'=>$alias]);
      if(empty($city))
        throw new \yii\web\HttpException(404, 'Такой категории нет');
      $query = Clinics::find()->where(['city_id'=>$city->id])->select(['id','city_id','name','phone','address','lat','lng','working_hours','tesla_1_5','private_property','mrt','mrt_min','kt','kt_min','for_children','free_concult','clinics_network',])->with('city');
      $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 20, 'forcePageParam' => false, 'pageSizeParam' => false,]);
      $clinics = $query->offset($pages->offset)
          ->limit($pages->limit)
          ->all();
      $keywords = $city->name.', МРТ, КТ';
      $meta_description = 'Клиники с МРТ и КТ в г.'.$city->name;
      $this->setMeta($city->name.' | '.Yii::$app->params['siteName'], $keywords, $meta_description);
      return $this->render('cities', compact('pages', 'clinics', 'city'));
    }
}
