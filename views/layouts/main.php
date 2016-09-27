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
    <title><?= Html::encode($this->title) ?></title>
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
            <a href="<?= Url::home(); ?>" class="navbar-brand active">Все клиники</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="">
                    <a href="<?=  Url::to(['/site/contact'])?>">Контакты
                    </a>
                </li>
                <li class="">
                    <a href="<?=  Url::to(['/site/about'])?>">О нас
                    </a>
                </li>
                <!--<li class="">
                    <a href="encyclopedia">Энциклопедия
                    </a>
                </li>
                 <li class="">
                    <a href="mfaq_mrt">О МРТ
                    </a>
                </li>
                <li class="">
                    <a href="mfaq_kt">О КТ
                    </a>
                </li> -->
            </ul>

        </div>
    </div>

    <?=$content?>
    
</div>
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>