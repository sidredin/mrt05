<?php

namespace app\controllers;

use Yii;
use app\models\Cities;
use app\models\Clinics;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends AppController
{
  /**
   * @inheritdoc
   */
  public function behaviors()
  {
      return [
          'access' => [
              'class' => AccessControl::className(),
              'only' => ['logout'],
              'rules' => [
                  [
                      'actions' => ['logout'],
                      'allow' => true,
                      'roles' => ['@'],
                  ],
              ],
          ],
          'verbs' => [
              'class' => VerbFilter::className(),
              'actions' => [
                  'logout' => ['post', 'get'],
              ],
          ],
      ];
  }

  /**
   * @inheritdoc
   */
  public function actions()
  {
      return [
          'error' => [
              'class' => 'yii\web\ErrorAction',
          ],
          'captcha' => [
              'class' => 'yii\captcha\CaptchaAction',
              'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
          ],
      ];
  }

  
      /**
   * Displays homepage.
   *
   * @return string
   */
  public function actionIndex()
  {
    $filter = Yii::$app->request->get('filter');
    $type = Yii::$app->request->get('type');
    $query= Clinics::find()->select(['id','city_id','name', 'logo','phone','address','lat','lng','working_hours','tesla_1_5','private_property','mrt','mrt_min','kt','kt_min','for_children','free_concult','clinics_network','open_tomograph'])->orderBy('order')->with('city');
    if($filter && $type){
      $clinics = $query->where([$filter=>1, $type=>1])->all();
    }elseif($filter || $type){
      if ($filter) {
        $clinics = $query->where([$filter=>1])->all();
      }else{
        $clinics = $query->where([$type=>1])->all();
      }
    }else{
      $clinics = $query->all();
    }
    $this->setMeta(Yii::$app->params['siteName'], Yii::$app->params['keywords'], Yii::$app->params['description']);
    return $this->render('index', compact('clinics'));
  }
  public function actionCities()
  {
    $alias = Yii::$app->request->get('alias')?Yii::$app->request->get('alias'):'makhachkala';
    $city = Cities::findOne(['alias'=>$alias]);
    if(empty($city))
      throw new \yii\web\HttpException(404, 'Такой категории нет');
    $filter = Yii::$app->request->get('filter');
    $type = Yii::$app->request->get('type');
    $query= Clinics::find()->select(['id','city_id','name', 'logo','phone','address','lat','lng','working_hours','tesla_1_5','private_property','mrt','mrt_min','kt','kt_min','for_children','free_concult','clinics_network','open_tomograph'])->with('city');
    if($filter && $type){
      $clinics = $query->where([$filter=>1, $type=>1, 'city_id'=>$city->id])->all();
    }elseif($filter || $type){
      if ($filter) {
        $clinics = $query->where([$filter=>1, 'city_id'=>$city->id])->all();
      }else{
        $clinics = $query->where([$type=>1, 'city_id'=>$city->id])->all();
      }
    }else{
      $clinics = $query->where(['city_id'=>$city->id])->all();
    }
    $keywords = $city->name.', МРТ, КТ';
    $meta_description = 'Клиники с МРТ и КТ в г.'.$city->name;
    $this->setMeta($city->name.' | '.Yii::$app->params['siteName'], $keywords, $meta_description);
    return $this->render('cities', compact('clinics', 'city'));
  }
  /**
   * Login action.
   *
   * @return string
   */
  public function actionLogin()
  {
      if (!Yii::$app->user->isGuest) {
          return $this->goHome();
      }

      $model = new LoginForm();
      if ($model->load(Yii::$app->request->post()) && $model->login()) {
          return $this->goBack();
      }
      return $this->render('login', [
          'model' => $model,
      ]);
  }

  /**
   * Logout action.
   *
   * @return string
   */
  public function actionLogout()
  {
      Yii::$app->user->logout();

      return $this->goHome();
  }

  /**
   * Displays contact page.
   *
   * @return string
   */
  public function actionContact()
  {
      $model = new ContactForm();
      if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
          Yii::$app->session->setFlash('contactFormSubmitted');

          return $this->refresh();
      }
      return $this->render('contact', [
          'model' => $model,
      ]);
  }

  /**
   * Displays about page.
   *
   * @return string
   */
  public function actionAbout()
  {
      return $this->render('about');
  }

  public function actionOffline()
  {
      return 'На сайте проводятся технические работы. Приносим извинения за доставленные неудобства!';
  }
}
