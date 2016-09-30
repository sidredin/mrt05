<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Clinics */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clinics-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'city_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price_mrt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price_kt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'working_hours')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'around_the_clock')->dropDownList([ '0'=>'Нет', '1'=>'Да', ]) ?>

    <?= $form->field($model, 'tesla_1_5')->textInput() ?>

    <?= $form->field($model, 'private_property')->textInput() ?>

    <?= $form->field($model, 'mrt')->textInput() ?>

    <?= $form->field($model, 'mrt_model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mrt_min')->textInput() ?>

    <?= $form->field($model, 'kt')->textInput() ?>

    <?= $form->field($model, 'kt_model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kt_min')->textInput() ?>

    <?= $form->field($model, 'for_children')->textInput() ?>

    <?= $form->field($model, 'free_concult')->textInput() ?>

    <?= $form->field($model, 'clinics_network')->textInput() ?>

    <?= $form->field($model, 'open_tomograph')->textInput() ?>

    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
