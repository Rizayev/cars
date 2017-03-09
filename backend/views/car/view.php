<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Cars */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cars-view">

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
            'car_condition',
            'mark',
            'model',
            'car_body',
            'car_price',
            'car_fuel_type',
            'car_owner_number',
            'car_year',
            'car_sale_type',
            'car_doors_count',
            'car_engine_size',
            'car_engine_additional',
            'car_vin',
            'car_carlocation',
            'car_phone',
            'car_power_hp',
            'car_gearbox_type',
            'car_number_gears',
            'car_fuel_city_100km',
            'car_fuel_highway_100km',
            'car_fuel_combined_100km',
            'car_environmental_standard',
            'car_volume_tank',
            'car_is_featured',
            'autobaza',
        ],
    ]) ?>

</div>
