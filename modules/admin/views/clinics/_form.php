<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Clinics */
/* @var $form yii\widgets\ActiveForm */

$this->registerJsFile('@web/js/LatLngPicker.js', ['position'=>\yii\web\View::POS_END, 'depends' => 'yii\web\YiiAsset'], 'LatLngPicker');
$this->registerJsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyBSsTYvYrSq2ITkQP51BDaT_b32DGO5UuM&callback=initialize', ['position'=>\yii\web\View::POS_END, 'depends' => 'LatLngPicker']);
?>

<div class="clinics-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order')->textInput() ?>

    <?php 
        echo $form->field($model, 'logo')->widget(CKEditor::className(), [
          'editorOptions' => ElFinder::ckeditorOptions('elfinder',
                [
                    'preset' => 'standard', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                    'inline' => false, //по умолчанию false
                ]
            ),
        ]);
     ?>

    <?= $form->field($model, 'city_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\modules\admin\models\Cities::find()->all(), 'id', 'name')) ?>

    <?= $form->field($model, 'mrt')->checkbox([ '0', '1']) ?>

    <?= $form->field($model, 'mrt_model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mrt_min')->textInput() ?>

    <?php 
        echo $form->field($model, 'price_mrt')->widget(CKEditor::className(), [
          'editorOptions' => ElFinder::ckeditorOptions('elfinder',
                [
                    'preset' => 'standard', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                    'inline' => false, //по умолчанию false
                ]
            ),
        ]);
     ?>

     <?= $form->field($model, 'kt')->checkbox([ '0', '1']) ?>

    <?= $form->field($model, 'kt_model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kt_min')->textInput() ?>


    <?php 
        echo $form->field($model, 'price_kt')->widget(CKEditor::className(), [
          'editorOptions' => ElFinder::ckeditorOptions('elfinder',
                [
                    'preset' => 'standard', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                    'inline' => false, //по умолчанию false
                ]
            ),
        ]);
     ?>

    <?php 
        echo $form->field($model, 'description')->widget(CKEditor::className(), [
          'editorOptions' => ElFinder::ckeditorOptions('elfinder',
                [
                    'preset' => 'standard', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                    'inline' => false, //по умолчанию false
                ]
            ),
        ]);
     ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <div id="map-opts" data-center-lat="<?=$model->lat?$model->lat:'42.948381397653165'?>" data-center-lng="<?=$model->lng?$model->lng:'47.51861572265625' ?>" data-map-zoom="<?=$model->lat?'17':'9'?>"></div>
    <div id="map"></div>

    <div style="margin-top: 15px;">
        <?= $form->field($model, 'lat')->textInput(['maxlength' => true])->label('Кликните по карте, чтобы заполнить это поле') ?>        
    </div>

    <?= $form->field($model, 'lng')->textInput(['maxlength' => true])->label('Кликните по карте, чтобы заполнить это поле') ?>

    <?= $form->field($model, 'working_hours')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'around_the_clock')->checkbox([ '0', '1']) ?>

    <?= $form->field($model, 'tesla_1_5')->checkbox([ '0', '1']) ?>

    <?= $form->field($model, 'private_property')->checkbox([ '0', '1']) ?>

    <?= $form->field($model, 'for_children')->checkbox([ '0', '1']) ?>

    <?= $form->field($model, 'free_concult')->checkbox([ '0', '1']) ?>

    <?= $form->field($model, 'clinics_network')->checkbox([ '0', '1']) ?>

    <?= $form->field($model, 'open_tomograph')->checkbox([ '0', '1']) ?>

    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
