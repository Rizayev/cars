<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\CarMark */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Car Marks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-mark-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_car_mark], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_car_mark], [
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
            'id_car_mark',
            'name',
            'date_create',
            'date_update',
            'id_car_type',
            'name_rus',
        ],
    ]) ?>

</div>
