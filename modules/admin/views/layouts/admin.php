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
        <div class="navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php if(!Yii::$app->user->isGuest): ?>
                    <li>
                    <a href="<?= \yii\helpers\Url::to(['/site/logout'])?>"><i class="fa fa-user"></i> <?= Yii::$app->user->identity['username']?> (Выход)</a>
                    </li>
                <?php endif;?>
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