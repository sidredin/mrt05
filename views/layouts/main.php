<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
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
                        <a href="encyclopedia">Энциклопедия
                        </a>
                    </li>
                
                

                    
                    <li class="">
                        <a href="rating"><span class='glyphicon glyphicon-signal'></span> Рейтинг клиник
                        </a>
                    </li>
                
                

                    
                    <li class="">
                        <a href="discounts"><span class='glyphicon glyphicon-thumbs-up'></span> Акции
                        </a>
                    </li>
                
                

                    
                    <li class="">
                        <a href="mfaq_mrt">О МРТ
                        </a>
                    </li>
                
                

                    
                    <li class="">
                        <a href="mfaq_kt">О КТ
                        </a>
                    </li>
                
            </ul>

        </div>
    </div>

    
<div class="row">
    <div class="col-sm-3">
        
<div class="hidden-xs">
    <!--noindex-->
    <div class="list-group">
        
        
        
        

        <a href="home/index/index.html@type=mrt" rel="nofollow" class="list-group-item ">
            <h4 class="list-group-item-heading">МРТ исследования</h4>

            <p class="list-group-item-text">Головы, позвоночника, внутренних органов, мягких тканей, суставов, сосудов</p>
        </a>
        
        <a href="home/index/index.html@type=kt" rel="nofollow" class="list-group-item ">
            <h4 class="list-group-item-heading">КТ исследования</h4>

            <p class="list-group-item-text">Головы, позвоночника, органов и мягких тканей,
            суставов и костей, сосудов</p>
        </a>
    </div>

    
        <div class="list-group" style="margin-bottom: 10px">
            


<a href="home/index@trigger=profy" class="trigger-right list-group-item " rel="nofollow" data-container="body" data-toggle="popover" data-placement="top" data-content="Этим значком отмечены диагностические клиники с лучшими врачами.">
    Лучшие специалисты
    
</a>

            


<a href="home/index@trigger=open" class="trigger-right list-group-item " rel="nofollow" data-container="body" data-toggle="popover" data-placement="top" data-content="Этим значком отмечены диагностические клиники имеющие в своем парке оборудования, МРТ открытого типа.">
    Открытый томограф
    
</a>

            
            
            


<a href="home/index@trigger=night" class="trigger-right list-group-item " rel="nofollow" data-container="body" data-toggle="popover" data-placement="top" data-content="Этим значком отмечены диагностические клиники работающие круглосуточно.">
    Круглосуточно
    
</a>

            


<a href="home/index@trigger=kid" class="trigger-right list-group-item " rel="nofollow" data-container="body" data-toggle="popover" data-placement="top" data-content="Этим значком отмечены диагностические клиники в которых накоплен опыт проведения МРТ/КТ исследований для детей.">
    Для детей
    
</a>

            


<a href="home/index@trigger=ht" class="trigger-right list-group-item " rel="nofollow" data-container="body" data-toggle="popover" data-placement="top" data-content="Этим значком отмечены диагностические клиники имеющие в своем парке оборудования, МРТ со сверхвысоким магнитным полем 3 Тл.">
    Поле 3 Тесла
    
</a>

        </div>
    

<!--/noindex-->

    
        
            <div>
                <div class="btn-group" style="margin-top: 10px;margin-bottom: 10px;">
                    <button type="button" data-toggle="dropdown"
                            class="btn btn-default dropdown-toggle ">
                        
                            
                                В районе
                            
                        
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        
                            <li>
                                <a href="area/view/admiralteisky">Адмиралтейский</a>
                            </li>
                        
                            <li>
                                <a href="area/view/vasiliostrovsky">Василеостровский</a>
                            </li>
                        
                            <li>
                                <a href="area/view/viborgsky">Выборгский</a>
                            </li>
                        
                            <li>
                                <a href="area/view/kalininsky">Калининский</a>
                            </li>
                        
                            <li>
                                <a href="area/view/kirovsky">Кировский</a>
                            </li>
                        
                            <li>
                                <a href="area/view/kolpinsky">Колпинский</a>
                            </li>
                        
                            <li>
                                <a href="area/view/krasnogvardeisky">Красногвардейский</a>
                            </li>
                        
                            <li>
                                <a href="area/view/krasnoselsky">Красносельский</a>
                            </li>
                        
                            <li>
                                <a href="area/view/kronshtadsky">Кронштадтcкий</a>
                            </li>
                        
                            <li>
                                <a href="area/view/kurortny">Курортный</a>
                            </li>
                        
                            <li>
                                <a href="area/view/moskovsky">Московский</a>
                            </li>
                        
                            <li>
                                <a href="area/view/nevsky">Невский</a>
                            </li>
                        
                            <li>
                                <a href="area/view/petrogradsky">Петроградский</a>
                            </li>
                        
                            <li>
                                <a href="area/view/petrodvortsovy">Петродворцовый</a>
                            </li>
                        
                            <li>
                                <a href="area/view/primorsky">Приморский</a>
                            </li>
                        
                            <li>
                                <a href="area/view/pushkinsky">Пушкинский</a>
                            </li>
                        
                            <li>
                                <a href="area/view/frunzensky">Фрунзенский</a>
                            </li>
                        
                            <li>
                                <a href="area/view/centralny">Центральный</a>
                            </li>
                        
                    </ul>
                </div>
            </div>
        

        

        
            <div>
                <div class="btn-group" style="margin-top: 10px;margin-bottom: 10px">
                    <button type="button" data-toggle="dropdown"
                            class="btn btn-default dropdown-toggle ">
                        
                            Рядом с метро
                        
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        
                            <li>
                                <a href="metro/view/admiralteiskaya">Адмиралтейская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/akademicheskaya">Академическая</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/baltiyskaya">Балтийская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/buharestkaya">Бухарестская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/vasiliostrovskaya">Василеостровская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/vladimirskaya">Владимирская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/viborgskaya">Выборгская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/gorkovskaya">Горьковская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/gos_dvor">Гостиный двор</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/gr_prospekt">Гражданский Проспект</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/dostoevskaya">Достоевская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/elizarovskaya">Елизаровская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/zvezdnaya">Звездная</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/zvenigorodskaya">Звенигородская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/komendantsky">Комендантский проспект</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/kr_ostrov">Крестовский Остров</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/kupchino">Купчино</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/ladozhskaya">Ладожская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/len_prospekt">Ленинский Проспект</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/lesnaya">Лесная</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/lomonosovskaya">Ломоносовская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/mayakovskaya">Маяковская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/megdunarodnaya">Международная</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/moskovskaya">Московская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/moskovskie_vorota">Московские Ворота</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/narvskaya">Нарвская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/nevskiy_prospect">Невский Проспект</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/novocherkaskaya">Новочеркасская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/obvodniy_canal">Обводный Канал</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/obuxovo">Обухово</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/ozerki">Озерки</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/park_pobedi">Парк Победы</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/parnas">Парнас</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/petrogradskaya">Петроградская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/pionerskaya">Пионерская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/pl_nevskogo">Площадь Александра Невского</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/pl_vostaniya">Площадь Восстания</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/pl_lenina">Площадь Ленина</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/pl_mugestva">Площадь Мужества</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/poiteknicheskaya">Политехническая</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/primorskaya">Приморская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/proletarskaya">Пролетарская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/pr_polshevikov">Проспект Большевиков</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/pr_veteranov">Проспект Ветеранов</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/pr_prosvesheniya">Проспект Просвещения</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/pushkinskaya">Пушкинская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/sadovaya">Садовая</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/sennaya">Сенная Площадь</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/spasskaya">Спасская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/sportivnaya">Спортивная</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/st_derevnya">Старая Деревня</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/tech_inst">Технологический Институт</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/udelnaya">Удельная</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/frunzenskaya">Фрунзенская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/chernaya_rechka">Черная Речка</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/chernishevskaya">Чернышевская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/chkalovskaya">Чкаловская</a>
                            </li>
                        
                            <li>
                                <a href="metro/view/elektrosila">Электросила</a>
                            </li>
                        
                    </ul>
                </div>
            </div>
        

        
        <!--/noindex-->
    

</div>
    </div>

    <div class="col-sm-9">   
<?=$content?>        
    </div>

</div>
</div>
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>