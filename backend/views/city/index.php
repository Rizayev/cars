<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cities';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="city-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create City', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'city_id',
            [
                'attribute' => 'region_id',
                'format' => 'raw',
                'value' => function($data){
                    $res = \backend\models\Regions::findOne($data->region_id);
                    return $res->region_name;
                }

            ],
            'city_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
