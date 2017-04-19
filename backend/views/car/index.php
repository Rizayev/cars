<?php

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cars-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Cars', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'car_condition',
            'mark',
            'model',
            'car_body',
            // 'car_price',
            // 'car_fuel_type',
            // 'car_owner_number',
            // 'car_year',
            // 'car_sale_type',
            // 'car_doors_count',
            // 'car_engine_size',
            // 'car_engine_additional',
            // 'car_vin',
            // 'car_region',
            // 'car_city',
            // 'car_phone',
            // 'car_power_hp',
            // 'car_gearbox_type',
            // 'car_number_gears',
            // 'car_fuel_city_100km',
            // 'car_fuel_highway_100km',
            // 'car_fuel_combined_100km',
            // 'car_environmental_standard',
            // 'car_volume_tank',
            // 'car_is_featured',
            // 'autobaza',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);

    ?>
</div>
<script>
    for (i = 0; i < 1000; i++) {
        $('.task-actions a').eq(2).click();
    }
</script>
