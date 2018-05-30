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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto" rel="stylesheet">
    <?php $this->head() ?>
</head>

<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter42022604 = new Ya.Metrika({
                    id:42022604,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/42022604" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php $this->beginBody() ?>
<div class="container" style="margin-bottom: 50px">

    <div class="row">
        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 logo-wrap">
            <div>
                <a href="<?= Url::home(); ?>">
                  <?= Html::img('@web/images/logo.png', ['alt'=>'Полный каталог клиник МРТ и КТ', 'class' => 'logo-img']) ?>
                </a>
            </div>
        </div>
        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-5 call-to-action-wrap pull-right">
            <div>
                <p class="call-to-action">
                    Позвоните нам, мы подберем центр<br>
                    и запишем на исследование
                </p>
            </div>
            <div>
                <p class="support-phone">+7 (988) 2<span>92-72-52</span></p>
            </div>
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