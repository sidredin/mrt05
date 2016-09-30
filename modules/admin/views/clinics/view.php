<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Clinics */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Clinics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('@web/js/view.js', ['position'=>\yii\web\View::POS_END, 'depends' => 'yii\web\YiiAsset']);
?>
<div class="clinics-view">

    <h1>Клиника: <?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
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
            'name',
            [
                'attribute' => 'city_id',
                'value' => $model->city->name,
            ],
            [
              'attribute'=>'mrt',
              'value'=>$model->mrt ? '<span class="text-success">Да</span>' : '<span class="text-danger">Нет</span>',
              'format'=>'html',
            ],
            'mrt_model',
            'mrt_min',
            'price_mrt:html',
            [
              'attribute'=>'kt',
              'value'=>$model->kt ? '<span class="text-success">Да</span>' : '<span class="text-danger">Нет</span>',
              'format'=>'html',
            ],
            'kt_model',
            'kt_min',
            'price_kt:html',
            'description:html',
            'meta_description',
            'phone',
            'email:email',
            'site',
            'address',
            'working_hours',            
            [
              'attribute'=>'around_the_clock',
              'value'=>$model->around_the_clock ? '<span class="text-success">Да</span>' : '<span class="text-danger">Нет</span>',
              'format'=>'html',
            ],
            [
              'attribute'=>'tesla_1_5',
              'value'=>$model->tesla_1_5 ? '<span class="text-success">Да</span>' : '<span class="text-danger">Нет</span>',
              'format'=>'html',
            ],
            [
              'attribute'=>'private_property',
              'value'=>$model->private_property ? '<span class="text-success">Да</span>' : '<span class="text-danger">Нет</span>',
              'format'=>'html',
            ],
            [
              'attribute'=>'for_children',
              'value'=>$model->for_children ? '<span class="text-success">Да</span>' : '<span class="text-danger">Нет</span>',
              'format'=>'html',
            ],
            [
              'attribute'=>'free_concult',
              'value'=>$model->free_concult ? '<span class="text-success">Да</span>' : '<span class="text-danger">Нет</span>',
              'format'=>'html',
            ],
            [
              'attribute'=>'clinics_network',
              'value'=>$model->clinics_network ? '<span class="text-success">Да</span>' : '<span class="text-danger">Нет</span>',
              'format'=>'html',
            ],
            [
              'attribute'=>'open_tomograph',
              'value'=>$model->open_tomograph ? '<span class="text-success">Да</span>' : '<span class="text-danger">Нет</span>',
              'format'=>'html',
            ],
        ],
    ]) ?>

</div>
