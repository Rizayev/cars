<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\CarMark;
use backend\models\CarModel;

/* @var $this yii\web\View */
/* @var $model backend\models\Cars */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cars-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'car_condition')->dropDownList(
        [
            '0' => "New",
            '1' => "Used",
        ],
        [
            'prompt' => 'Select condition',
        ]
    ) ?>

    <?= $form->field($model, 'mark')->dropDownList(
        ArrayHelper::map(CarMark::find()->asArray()->all(), 'id_car_mark', 'name'),
        [
            'prompt' => 'Select mark',
        ]
    ) ?>

    <?= $form->field($model, 'model')->dropDownList(
        ArrayHelper::map(CarModel::find()->asArray()->all(), 'id_car_model', 'name'),
        [
            'prompt' => 'Select mark',
        ]
    ) ?>

    <?= $form->field($model, 'car_body')->dropDownList([
        '0' => "Kombi",
        '1' => "Hatchback",
        '2' => "Sedan",
        '3' => "MPV (velké rodinné vozy)",
        '4' => "SUV (crossovery)",
        '5' => "Kupé (sportovní vozy)",
        '6' => "Kabriolet",
        '7' => "Bus / dodávka",
    ],
        [
            'prompt' => 'Select car body',
        ]
    ) ?>

    <?= $form->field($model, 'car_price')->textInput() ?>

    <?= $form->field($model, 'car_fuel_type')->dropDownList([
        '0' => "Benzín",
        '1' => "Diesel",
        '2' => "LPG, CNG",
        '3' => "Hybrid",
        '4' => "Electro",
    ]) ?>

    <?= $form->field($model, 'car_owner_number')->dropDownList([
        '1' => "1",
        '2' => "2",
        '3' => "3",
        '4' => "4",
        '5' => "5",
    ]) ?>

    <?= $form->field($model, 'car_year')->textInput() ?>

    <?= $form->field($model, 'car_sale_type')->dropDownList([
        '1' => "1",
        '2' => "2",
        '3' => "3",
        '4' => "4",
        '5' => "5",
    ]) ?>

    <?= $form->field($model, 'car_doors_count')->textInput() ?>

    <?= $form->field($model, 'car_engine_size')->textInput() ?>

    <?= $form->field($model, 'car_engine_additional')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_vin')->textInput() ?>

    <?= $form->field($model, 'car_carlocation')->textInput() ?>

    <?= $form->field($model, 'car_phone')->textInput() ?>

    <?= $form->field($model, 'car_power_hp')->textInput() ?>

    <?= $form->field($model, 'car_gearbox_type')->dropDownList([
        '1' => "1",
        '2' => "2",
        '3' => "3",
        '4' => "4",
        '5' => "5",
    ]) ?>

    <?= $form->field($model, 'car_number_gears')->textInput() ?>

    <?= $form->field($model, 'car_fuel_city_100km')->textInput() ?>

    <?= $form->field($model, 'car_fuel_highway_100km')->textInput() ?>

    <?= $form->field($model, 'car_fuel_combined_100km')->textInput() ?>

    <?= $form->field($model, 'car_environmental_standard')->dropDownList([
        '1' => "1",
        '2' => "2",
        '3' => "3",
        '4' => "4",
        '5' => "5",
    ]) ?>

    <?= $form->field($model, 'car_volume_tank')->textInput() ?>

    <?= $form->field($model, 'car_is_featured')->dropDownList([
        '0' => "0",
        '1' => "1",
    ]) ?>

    <?= $form->field($model, 'autobaza')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
