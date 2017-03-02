<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Car Marks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-mark-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Car Mark', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_car_mark',
            'name',
            'date_create',
            'date_update',
            'id_car_type',
            // 'name_rus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
