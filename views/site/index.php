<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->registerJsFile('@web/js/clinics.js', ['position'=>\yii\web\View::POS_END, 'depends' => 'yii\web\YiiAsset'], 'clinics');
$this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyBSsTYvYrSq2ITkQP51BDaT_b32DGO5UuM&callback=initialize', ['position'=>\yii\web\View::POS_END, 'depends' => 'clinics']);
?>

<div class="row">
  <?= $this->render('_sidebar') ?>

  <div class="col-sm-9">
    <h2 style="margin-top: 0px">
        <small>МРТ и КТ клиники</small>
    </h2>
    <div id="map-opts" data-center-lat="42.948381397653165" data-center-lng="47.51861572265625" data-map-zoom="7"></div>
    <div id="map"></div>

    <?= $this->render('_clinics', compact('pages', 'clinics')) ?>
  </div>
</div>