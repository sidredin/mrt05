<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
// use yii\bootstrap\Nav;
// use yii\bootstrap\NavBar;
// use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>Админка | <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<div class="container" style="margin-bottom: 50px">

    <div class="row">
        <div class="col-sm-8">
            <div class="pull-left" style="margin-right: 20px">
                <a href="<?= Url::home(); ?>">
                  <?= Html::img('@web/images/logo.jpg', ['alt'=>'Полный каталог клиник МРТ и КТ']) ?>
                </a>
            </div>

            <h3 style="margin-top: 10px">Полный каталог клиник<br/>
                <small>МРТ&nbsp;КТ</small>
            </h3>
        </div>
    </div>

    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?=  Url::to(['/admin'])?>" class="navbar-brand active">Админка</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a id="dLabel" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Клиники
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <li>
                            <a href="<?= Url::to(['/admin/clinics'])?>">Список клиник</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/admin/clinics/create'])?>">Добавить клинику</a>
                        </li>
                      </ul>
                </li>
                <li class="dropdown">
                    <a id="dLabel" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Города
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <li>
                            <a href="<?= Url::to(['/admin/cities'])?>">Список городов</a>
                        </li>
                        <li>
                            <a href="<?= Url::to(['/admin/cities/create'])?>">Добавить город</a>
                        </li>
                      </ul>
                </li>
                <?php if(!Yii::$app->user->isGuest): ?>
                    <li>
                    <a href="<?= Url::to(['/site/logout'])?>"><i class="fa fa-user"></i> <?= Yii::$app->user->identity['username']?> (Выход)</a>
                    </li>
                <?php endif;?>
            </ul>
            <div class="dropdown">
              
            </div>

        </div>
    </div>
    <?php if( Yii::$app->session->hasFlash('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>
    <?=$content?>
    
</div>
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>