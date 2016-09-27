<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

$this->registerJsFile('@web/js/view.js', ['position'=>\yii\web\View::POS_END, 'depends' => 'yii\web\YiiAsset']);
$this->registerJsFile('@web/js/maps.js', ['position'=>\yii\web\View::POS_END, 'depends' => 'yii\web\YiiAsset'], 'maps');
$this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyBSsTYvYrSq2ITkQP51BDaT_b32DGO5UuM&callback=initialize', ['position'=>\yii\web\View::POS_END, 'depends' => 'maps']);
?>
<div id="map-opts" data-center-lat="<?=$clinic->lat?>" data-center-lng="<?=$clinic->lng?>" data-map-zoom="17"></div>
<div class="row clinic-row" data-lat="<?=$clinic->lat?>" data-lng="<?=$clinic->lng?>">
    <div class="col-sm-6">
            
        <h2 style="margin-top: 0px"><?=$clinic->name?></h2>

        <?php echo $clinic->private_property ? '<span class="label label-primary">Частная</span>' : '<span class="label label-default">Государственная</span>' ?>
        <?php if ($clinic->tesla_1_5) echo '<span class="label label-success trigger"><span class="glyphicon glyphicon-ok"></span>Сверхвысокое поле</span>' ?>
        <?php if(mb_stristr ($clinic->working_hours, 'круглосуточно'))
          echo '<span class="label label-success trigger"><span class="glyphicon glyphicon-ok"></span>МРТ/КТ ночью</span>';
        ?>
        <?php if ($clinic->for_children) echo '<span class="label label-success trigger"><span class="glyphicon glyphicon-ok"></span>Для детей</span>' ?>
        <?php if ($clinic->free_concult) echo '<span class="label label-success trigger"><span class="glyphicon glyphicon-ok"></span>Бесплатная консультация</span>' ?>
        <?php if ($clinic->clinics_network) echo '<span class="label label-success trigger"><span class="glyphicon glyphicon-ok"></span>Сеть клиник</span>' ?>
        <?php if ($clinic->open_tomograph) echo '<span class="label label-success trigger"><span class="glyphicon glyphicon-ok"></span>Открытый томограф</span>' ?>

        <dl class="dl-horizontal">

            <dt>Город</dt>
            <dd>
                <a href="<?=  Url::to(['/site/cities', 'alias'=>$clinic->city->alias])?>">
                    г. <?=$clinic->city->name?>
                </a>
            </dd>

            <dt>Адрес</dt>
            <dd><?=$clinic->address?>
            </dd>

            <dt>Телефон</dt>
            <dd>
                <span class="glyphicon glyphicon-earphone"></span>                
                <span>
                    <?=$clinic->phone?>
                </span>
            </dd>
            
            <dt>Время работы</dt>
            <dd><span class="glyphicon glyphicon-time"></span> <?=$clinic->working_hours?></dd>
        </dl>

        <?php if($clinic->price_mrt): ?>
        <h4><i>Цены на МРТ:</i></h4>
        <?=$clinic->price_mrt?>
        <?php endif; ?>

        <?php if($clinic->price_kt): ?>
        <h4><i>Цены на КТ:</i></h4>
        <?=$clinic->price_kt?>
        <?php endif; ?>

        <dl class="dl-horizontal" style="margin-top: 20px">
        
            <?php if($clinic->email): ?>
            <dt>Email</dt>
            <dd><?=$clinic->email?></dd>            
            <?php endif; ?>

            <?php if($clinic->site): ?>
            <dt>Сайт</dt>
            <dd><?=$clinic->site?></dd>            
            <?php endif; ?>

            <?php if($clinic->mrt_model): ?>
            <dt>Модель МРТ</dt>
            <dd><?=$clinic->mrt_model?></dd>            
            <?php endif; ?>

            <?php if($clinic->kt_model): ?>
            <dt>Модель КТ</dt>
            <dd><?=$clinic->kt_model?></dd>            
            <?php endif; ?>        
        </dl>


    </div>

    <div class="col-sm-6" style="padding: 10px">
        <div id="map" style="width: 100%; height: 300px; margin-bottom: 20px"></div>
    </div>
</div>


<?php if($clinic->description): ?>
<div class="row">
    <div class="cl-sm-9">
        
        <div style="padding: 10px">
            
            <?=$clinic->description?>

        </div>
    </div>
</div>
<?php endif; ?>