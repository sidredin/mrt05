<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

?> 

<?php foreach ($clinics as $clinic):?> 
  <div class="row clinic-row" data-lat="<?=$clinic->lat?>" data-lng="<?=$clinic->lng?>">
    <div class="col-xs-4 col-sm-2">
      <a href="<?=  Url::to(['/clinic/view', 'id'=>$clinic->id])?>">
        <?= Html::img("@web/images/clinics/{$clinic->id}.jpg", ["alt" => $clinic->name, "class"=>"img-responsive clinic-table-img"]) ?>
      </a>
    </div>
    <div class="col-xs-8 col-sm-7">        
      <h4 class="heading">
          <a href="<?=  Url::to(['/clinic/view', 'id'=>$clinic->id])?>"><?=$clinic->name?></a>
      </h4>
      <div class="phone">
        <span class="glyphicon glyphicon-earphone"></span>
        <?=$clinic->phone?>
      </div>
      <p>
        <span class="glyphicon glyphicon-map-marker"></span>  
        <?=$clinic->address?>                
        <br/>
        <a href="<?=  Url::to(['/site/cities', 'alias'=>$clinic->city->alias])?>">
            г. <?=$clinic->city->name?>
        </a>                
      </p>
      <p>
          <i class="glyphicon glyphicon-time"></i>
          <em><?=$clinic->working_hours?></em>
      </p>
      <div>
        <?php echo $clinic->private_property ? '<span class="label label-primary">Частная</span>' : '<span class="label label-default">Государственная</span>' ?>
        <?php if ($clinic->tesla_1_5) echo '<span class="label label-success trigger"><span class="glyphicon glyphicon-ok"></span>Сверхвысокое поле</span>' ?>
        <?php if(mb_stristr ($clinic->working_hours, 'круглосуточно'))
          echo '<span class="label label-success trigger"><span class="glyphicon glyphicon-ok"></span>МРТ/КТ ночью</span>';
        ?>
        <?php if ($clinic->for_children) echo '<span class="label label-success trigger"><span class="glyphicon glyphicon-ok"></span>Для детей</span>' ?>
        <?php if ($clinic->free_concult) echo '<span class="label label-success trigger"><span class="glyphicon glyphicon-ok"></span>Бесплатная консультация</span>' ?>
        <?php if ($clinic->clinics_network) echo '<span class="label label-success trigger"><span class="glyphicon glyphicon-ok"></span>Сеть клиник</span>' ?>
        <?php if ($clinic->open_tomograph) echo '<span class="label label-success trigger"><span class="glyphicon glyphicon-ok"></span>Открытый томограф</span>' ?>
      </div>        
    </div>
    <div class="col-xs-12 col-sm-3">
      <?php if($clinic->mrt_min): ?>
      <p>
        <strong>МРТ</strong>&nbsp;от&nbsp;<?=$clinic->mrt_min; ?>р
      </p>
      <?php endif; ?>
      <?php if($clinic->kt_min): ?>
      <p>
        <strong>КТ</strong>&nbsp;от&nbsp;<?=$clinic->kt_min; ?>р
      </p>
      <?php endif; ?>
    </div>
</div>
<?php endforeach; ?>