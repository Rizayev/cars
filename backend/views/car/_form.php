<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\CarMark;

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
    <?= $form->field($model, 'car_region')->dropDownList(
        ArrayHelper::map(\backend\models\Regions::find()->asArray()->all(), 'region_id', 'region_name'),
        [
            'prompt' => 'Select car region',
        ]
    ) ?>

    <?= $form->field($model, 'car_city')->dropDownList(
        ArrayHelper::map(\backend\models\City::find()->where(['region_id' => $model->car_region])->asArray()->all(), 'city_id', 'city_name'),
        [
            'prompt' => 'Select car city',
        ]
    )
    ?>

    <?= $form->field($model, 'mark')->dropDownList(
        ArrayHelper::map(CarMark::find()->asArray()->all(), 'id_car_mark', 'name'),
        [
            'prompt' => 'Select mark'
        ]
    ) ?>

    <?= $form->field($model, 'model')->dropDownList(
        ArrayHelper::map(\backend\models\CarModel::find()->where(['id_car_mark' => $model->mark])->asArray()->all(), 'id_car_model', 'name'),
        [
            'prompt' => 'Select model'
        ]
    ); ?>

    <?= $form->field($model, 'car_body')->dropDownList(
        ArrayHelper::map(\backend\models\CarBody::find()->asArray()->all(), 'id_body', 'car_body_name'),
        [
            'prompt' => 'Select car body',
        ]
    ) ?>
    <div class="input-group">

        <?= $form->field($model, 'car_price', [
            'template' => "{label}\n <div class=\"input-group\"><div class=\"input-group-addon\">$</div>\n{input}\n{hint}</div>\n{error}"
        ])->textInput() ?>
    </div>
    <?= $form->field($model, 'car_fuel_type')->dropDownList(
        ArrayHelper::map(\backend\models\CarFuelType::find()->asArray()->all(), 'id_fuel', 'car_fuel_name'),
        [
            'prompt' => 'Select fuel type',
        ]
    ) ?>

    <?= $form->field($model, 'car_owner_number')->dropDownList([
        '1' => "1",
        '2' => "2",
        '3' => "3",
        '4' => "4",
        '5' => "5",
    ]) ?>

    <?= $form->field($model, 'car_year')->textInput() ?>

    <?= $form->field($model, 'car_sale_type')->textInput() ?>

    <?= $form->field($model, 'car_doors_count')->textInput() ?>

    <?= $form->field($model, 'car_engine_size')->textInput() ?>

    <?= $form->field($model, 'car_engine_additional')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_vin')->textInput() ?>



    <?= $form->field($model, 'car_phone')->textInput() ?>

    <?= $form->field($model, 'car_power_hp')->textInput() ?>

    <?= $form->field($model, 'car_gearbox_type')->dropDownList(
        ArrayHelper::map(\backend\models\CarGearType::find()->asArray()->all(), 'id_gear', 'car_gear_name'),
        [
            'prompt' => 'Select mark'
        ]
    ) ?>

    <?= $form->field($model, 'car_number_gears')->textInput() ?>

    <?= $form->field($model, 'car_fuel_city_100km')->textInput() ?>

    <?= $form->field($model, 'car_fuel_highway_100km')->textInput() ?>

    <?= $form->field($model, 'car_fuel_combined_100km')->textInput() ?>

    <?= $form->field($model, 'car_environmental_standard')->textInput() ?>

    <?= $form->field($model, 'car_volume_tank')->textInput() ?>

    <?= $form->field($model, 'car_is_featured')->textInput() ?>

    <?= $form->field($model, 'autobaza')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->hiddenInput([ 'maxlength' => true, 'value' => Yii::$app->user->identity->getId() ])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
