<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
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
                <a href="index.html">
                    <img src="static/images/logo.png" class="img-responsive" alt="logo" />
                </a>
            </div>

            <h3 style="margin-top: 10px">Полный каталог клиник<br/>
                <small>МРТ&nbsp;КТ</small>
            </h3>
        </div>

        <div class="col-sm-4" style="padding: 20px; text-align: right">
            <div class="btn-group">
    <a href="index.html" class="btn btn-primary active">Санкт-Петербург</a>
    <a href="http://mrict.ru" class="btn btn-default">Москва</a>
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
            <a href="index.html" class="navbar-brand active">Все клиники</a>
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
        <h2 style="margin-top: 0px">
            <a href="index.html">
            СПб <small>МРТ и КТ клиники</small>
            </a>
        </h2>
        <div id="map" style="height: 400px; width: 100%"></div>
        
            

   
<?=$content?>

        
    </div>

</div>


    <div style="padding: 10px">
        <h1 style="font-size: 25px">МРТ в Санкт-Петербурге. Полный каталог МРТ/КТ клиник Санкт-Петербурга. МРТ/КТ головного мозга и МРТ/КТ позвоночника.</h1>
        <div class='ckeditor'><p>Наука и техника не стоят на месте, и ушедший ХХ век подарил медицине множество открытий и изобретений, одними из которых являются магнитно-резонансная и компьютерная томографии. Оба метода сделали прорыв в диагностике широкого круга заболеваний, позволили информативно исследовать ткани и органы человека, выявлять патологии, которые невозможно обнаруживать с помощью рентгена, ультразвуковых и других видов диагностики.</p>

<p><strong>Магнитно-резонансная томография</strong> представляет собой современный высокоинформативный способ исследования состояния внутренних структур организма, который позволяет неинвазивно (без внешнего вмешательства) устанавливать причины тех или иных симптомов. Принцип метода заключается в измерении электромагнитного отклика ядер атомов водорода в результате их возбуждения электромагнитными волнами в постоянном магнитном поле высокой напряжённости.</p>

<p>Поскольку МРТ не несет лучевой нагрузки, она является абсолютно безопасной для здоровья и дает возможность повторять диагностику так часто, как это требуется в каждом конкретном случае.</p>

<p>С помощью магнитно-резонансной томографии можно успешно диагностировать онкологические заболевания, воспалительные, дегенеративно-дистрофические процессы, аномалии развития головного мозга, позвоночника, суставов, внутренних органов.</p>

<p>Огромное значение в диагностике ряда патологий имеет <strong>МРТ головного мозга</strong>. С помощью метода эффективно определяют причину головных болей, головокружений, тошноты, нарушения слуха, зрения, слабости.</p>

<p>При исследовании головного мозга МРТ позволяет выявлять заболевания и поражения кровеносных сосудов: аневризмы, тромбозы, артерио-венозные мальформации, стенозы, атеросклероз и прочие нарушения.</p>

<p>МРТ головного мозга позволяет надежно диагностировать:</p>

<ul>
	<li>&nbsp;воспалительные заболевания мозга и его оболочек, к примеру, энцефалит, абсцесс, менингит и пр.;</li>
	<li>рассеянный склероз и другие демиелинизирующие заболевания головного мозга;</li>
	<li>первичные и рецидивирующие опухолевые образования, подозрения на метастатические поражения мозга, его структур, орбит, придаточных пазух носа;</li>
	<li>болезни Паркинсона и Альцгеймера;</li>
	<li>перенесенные травматические повреждения головного мозга;</li>
	<li>аденомы и другие патологии гипофиза.</li>
</ul>

<p>Большое значение при исследованиях состояния мозга МРТ имеет для оценки повреждений после перенесенных инсультов и инфарктов.</p>

<p>Также томография головного мозга используется при подготовке пациента к хирургическому вмешательству, выборе наиболее оптимальной стратегии лечения, при контроле над эффективностью проводимой терапии.</p>

<p>Высокое качество получаемых изображений позволяет исследовать структуры головного мозга в мельчайших подробностях, а это способствует правильной постановке диагноза.</p>

<p>Там, где КТ, УЗИ и рентген являются малоинформативными методами диагностики патологий мозга, магнитно-резонансная томография представляет собой единственный способ получения необходимого уровеня детализации и&nbsp;качества снимков, что делает метод наиболее надежным в исследовании головного мозга.</p>

<p>Большое значение имеет магнитно-резонансная томография в диагностике повреждений и патологий коленного сустава. Метод позволяет визуализировать изменения в его структуре и отдельных элементах, несмотря на сложное анатомическое строение. На снимках <strong>МРТ коленного сустава</strong> хорошо показывает хрящи, мягкие ткани, мениски, внутрисуставные связки, прочие компоненты, которые подвергаются травмам и патологическим изменениям.</p>

<p>Метод позволяет диагностировать:</p>

<ul>
	<li>артриты;</li>
	<li>артрозы;</li>
	<li>ущемление сухожилий и нервов;</li>
	<li>злокачественные или доброкачественные опухоли;</li>
	<li>остеохондропатию;</li>
	<li>последствия травм;</li>
	<li>нестабильность, привычный вывих;</li>
	<li>эпикондилит и прочие патологии.</li>
</ul>

<p>При обследовании позвоночника и спинного мозга МРТ позволяет визуализировать общее состояние межпозвоночных дисков, межпозвоночных промежутков, через которые проходят нервные окончания. При помощи метода можно сделать диагностику всего позвоночника и его отдельных отделов: шейного, грудного, пояснично-крестцового.</p>

<p>В основном МРТ успешно используется для выявления:</p>

<ul>
	<li>дегенеративных изменений, протрузий, грыж дисков;</li>
	<li>остеохондроза;</li>
	<li>спинных инфекций;</li>
	<li>опухолевых образований различной природы для уточнения их размеров, характера, степени развития, особенностей взаимоотношения с другими тканями и органами;</li>
	<li>защемлений, воспалений нервов, компрессии;</li>
	<li>перенесенных переломов, вывихов, других травм позвоночника;</li>
	<li>послеоперационного контроля состояния;</li>
	<li>ушибов и кровоизлияний в спинной мозг;</li>
	<li>стеноза позвоночного канала;</li>
	<li>патологий сосудистого русла.</li>
</ul>

<p>Следует отметить, что <strong>МРТ позвоночника в Санкт-Петербурге</strong> является одним из самых распространенных и востребованных видов исследования.</p>

<hr />
<p>В северной столице в настоящее время насчитывается достаточно большое количество частных и государственных медицинских учреждений, которые выполняют магнитно-резонансную томографию. Все клиники отличаются характеристиками оборудования, программного обеспечения, квалификацией медицинского персонала, графиком работы, а также стоимостью на диагностику. Из-за такого разнообразия факторов, влияющих на качество диагностики, подчас далеко не каждый будущий пациент может разобраться в том, где ему лучше пройти обследование.</p>

<p>Для Вашего удобства и экономии времени на поиски подходящей клиники на нашем ресурсе представлен полный список учреждений, где можно сделать <strong>МРТ в Санкт-Петербурге</strong>. Для каждого медицинского центра указан контактный телефон, адрес, график работы, стоимость на основные виды исследований, характеристики томографов, поскольку этот показатель определяет качество снимков и от него во многом зависит корректность поставленного диагноза.</p>

<p>На сайте собраны самые часто задаваемые вопросы и доступным языком для широкого круга пользователей изложены ответы на них: что такое МРТ, какие существуют показания, противопоказания, можно ли делать томографию детям, как можно пройти диагностику бесплатно и пр.</p>

<p>Вам не нужно тратить уйму времени для поиска оптимального медицинского учреждения по телефону или Интернету. На нашем сайте Вы можете подробнее узнать, какие клиники проводят исследования только днем, а какие центры работают круглосуточно, где можно сделать МРТ коленного сустава в Санкт-Петербурге, томографию головного мозга, всех отделов позвоночника, внутренних органов по доступным ценам.</p>

<p>Удобная карта города, на которой отмечены все медицинские учреждения, позволит Вам измерить расстояние до дома или любой другой точки города, а с помощью виртуальных форм, размещенных на сайтах клиник, Вы сможете записаться на прием, не отходя от компьютера.</p>

<p>Наглядная карта города и информация о работе медицинских центров Петербурга и пригородов, представленная на нашем ресурсе, поможет Вам за короткое время выбрать лучший вариант клиники, диагностического центра или больницы для прохождения исследования.</p>

<p>Мы делаем <strong>МРТ в СПб</strong> доступной медицинской услугой, позволяя сэкономить Ваше время на поиски оптимального варианта учреждения по графику работы, стоимости диагностики, удаленности от любой точки города.</p>

<hr />
<p>Другим современным методом исследования состояния внутренних органов и выявления большого числа патологических изменений является <strong>компьютерная томография</strong>. Этот метод является лучевым и основан на просвечивании организма пациента рентгеновскими лучами с дальнейшей компьютерной обработкой полученных данных в единый срез. КТ успешно применяется для послойной диагностики головного мозга, легких, позвоночника, печени, желудка, почек, поджелудочной железы, кишечника, надпочечников, органов малого таза, крупных, мелких кровеносных сосудов, других структур.</p>

<p>Томография успешно используется для выявления опухолевых образований, воспалительных, инфекционных процессов различной локализации, последствий перенесенных травм, дегенеративных заболеваний, врожденных патологий развития, поражений полых, паренхиматозных органов, нарушений кровообращения мозга, легких, сердца, других органов.</p>

<p>Высокая разрешающая способность по сравнению с обычным рентгенологическим исследованием делает КТ наиболее информативным и ценным&nbsp; в установлении причины широкого круга симптомов.</p>

<p>К примеру, при исследовании головного мозга КТ имеет большое значение в диагностике острой фазы инсульта, перенесенных черепно-мозговых травм, патологий сосудов. В диагностике органов грудной клетки и средостения томография позволяет выявлять плевриты, пневмонию, туберкулез, абсцессы, другие воспалительные процессы и нарушения структуры дыхательной и сердечно-сосудистой систем. КТ брюшной полости показана при абсцессах, панкреатите, аппендиците, желчнокаменной болезни, циррозе печени, гепатитах и других патологиях органов брюшной полости.</p>

<p>На нашем сайте представлена подробная информация о видах исследований методом компьютерной томографии, ее противопоказаниях, клиниках города, которые выполняют данный вид диагностики.</p>

<p>&nbsp;</p>

<p>&nbsp;</p></div>
    </div>




</div>
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>