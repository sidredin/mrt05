<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список клиник';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clinics-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить клинику', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            // [
            //     'attribute' => 'city_id',
            //     'value' => function($data){
            //         debug($data);
            //     },
            // ],
            'city_id',
            'name',
            // 'price_mrt:ntext',
            // 'price_kt:ntext',
            // 'description:ntext',
            // 'phone',
            // 'email:email',
            // 'site',
            // 'address',
            // 'lat',
            // 'lng',
            // 'working_hours',
            // 'around_the_clock',
            // 'tesla_1_5',
            // 'private_property',
            // 'mrt',
            // 'mrt_model',
            // 'mrt_min',
            // 'kt',
            // 'kt_model',
            // 'kt_min',
            // 'for_children',
            // 'free_concult',
            // 'clinics_network',
            // 'open_tomograph',
            // 'meta_description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
