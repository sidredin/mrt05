<?php

/* @var $this yii\web\View */

$this->registerJsFile('@web/js/main.js', ['position'=>\yii\web\View::POS_END, 'depends' => 'yii\web\YiiAsset'], 'main');
$this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyBSsTYvYrSq2ITkQP51BDaT_b32DGO5UuM&callback=initialize', ['position'=>\yii\web\View::POS_END, 'depends' => 'main']);
?>
<div class="row"> 
  <?= $this->render('_sidebar') ?>
  <div class="col-sm-9">  
    <h2 style="margin-top: 0px">
      <?=$city->name?> <small>МРТ и КТ клиники</small>
    </h2>
    <div id="map-opts" data-center-lat="<?=$city->lat?>" data-center-lng="<?=$city->lng?>" data-map-zoom="<?=$city->zoom?>"></div>
    <?php if(!empty($clinics)): ?>
    <div id="map"></div>
    <?= $this->render('_clinics', compact('pages', 'clinics', 'city')) ?>
      <?php else: ?>
      <h2>По данному городу сведений пока нет. Мы работаем над этим...</h2>
    <?php endif; ?>
  </div>
</div>
