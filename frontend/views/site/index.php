<?php

/* @var $this yii\web\View */
$countCars = \backend\models\Cars::find()->count();
$this->title = 'My Yii Application';
?>
<style>
    input, select {
        width: 100%;
        margin-bottom: 20px;
        background: #fff;
    }
    input[disabled], select[disabled], textarea[disabled] {
        background-color: #f6f6f6;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <fieldset>Stát:</fieldset>
            <select name="" id="car-region">
                <option value="0">Nevybráno</option>
                <?php for ($i = 0; $i < count($carRegion); $i++): ?>

                    <option value="<?= $carRegion[$i]['region_id'] ?>"><?= $carRegion[$i]['region_name'] ?></option>

                <?php endfor; ?>
            </select>
        </div>
        <div class="col-md-2">
            <fieldset>Okres:</fieldset>
            <select name="" id="car-city" disabled="disabled">
                <option value="0">Nevybráno</option>
            </select>
        </div>
        <div class="col-md-2">
            <fielset>Značka:</fielset>
            <select name="" id="car-mark">
                <option value="0">Nevybráno</option>
                <?php for ($i = 0; $i < count($carMark); $i++): ?>

                    <option value="<?= $carMark[$i]['id_car_mark'] ?>"><?= $carMark[$i]['name'] ?></option>

                <?php endfor; ?>
            </select>
        </div>
        <div class="col-md-2">
            <!--            <select name="" id="">-->
            <!--                --><?php //for ($i = 0; $i < count($carModel); $i++): ?>
            <!---->
            <!--                    <option data-id-model="--><? //=$carModel[$i]['id_car_model']?><!--" value="-->
            <? //=$carModel[$i]['name']?><!--">--><? //=$carModel[$i]['name']?><!--</option>-->
            <!---->
            <!--                --><?php //endfor;?>
            <!--            </select>-->

            <fieldset>Model:</fieldset>
            <select name="" id="car-model" disabled="disabled">
                <option value="0">Nevybráno</option>
            </select>
        </div>
        <div class="col-md-2">
            <fieldset>Cena (Kč) od:</fieldset>
            <input type="text">
        </div>
        <div class="col-md-2">
            <fieldset>Cena (Kč) do:</fieldset>
            <input type="text">
        </div>
        <div class="col-md-2">
            <fieldset>Palivo</fieldset>
            <select name="">
                <option value="0">Nevybráno</option>
                <?php for ($i = 0; $i < count($carFuel); $i++): ?>
                    <option value="<?= $carFuel[$i]['id_fuel'] ?>"><?= $carFuel[$i]['car_fuel_name'] ?></option>

                <?php endfor; ?>
            </select>
        </div>
        <div class="col-md-2">
            <fieldset>Převodovka</fieldset>
            <select name="">
                <option value="0">Nevybráno</option>
                <?php for ($i = 0; $i < count($carGear); $i++): ?>

                    <option value="<?= $carGear[$i]['id_gear'] ?>"><?= $carGear[$i]['car_gear_name'] ?></option>

                <?php endfor; ?>
            </select>
        </div>

        <div class="col-md-2">
            <fieldset>Rok výroby od:</fieldset>
            <input type="text">
        </div>
        <div class="col-md-2">
            <fieldset>Rok výroby do:</fieldset>
            <input type="text">
        </div>
        <div class="col-md-2">
            <fieldset>Karoserie</fieldset>
            <select name="">
                <option value="0">Nevybráno</option>
                <?php for ($i = 0; $i < count($carBody); $i++): ?>

                    <option value="<?= $carBody[$i]['id_body'] ?>"><?= $carBody[$i]['car_body_name'] ?></option>

                <?php endfor; ?>
            </select>
        </div>
        <div class="col-md-2">
            <fieldset>Cars Count:</fieldset>
             <b><?=$countCars?></b>
        </div>
    </div>
</div>
