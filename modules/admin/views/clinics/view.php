<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Clinics */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Clinics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clinics-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'city_id',
            'name',
            'price_mrt:ntext',
            'price_kt:ntext',
            'description:ntext',
            'phone',
            'email:email',
            'site',
            'address',
            'lat',
            'lng',
            'working_hours',
            'around_the_clock',
            'tesla_1_5',
            'private_property',
            'mrt',
            'mrt_model',
            'mrt_min',
            'kt',
            'kt_model',
            'kt_min',
            'for_children',
            'free_concult',
            'clinics_network',
            'open_tomograph',
            'meta_description',
        ],
    ]) ?>

</div>
