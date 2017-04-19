<?php

use backend\models\CarMark;
use yii\helpers\Url;
use yii\widgets\LinkPager;
$imgRand = [68207,68208,68208,68204,68202,68201,68199,68198,68197,68196,68195,68194,68193,68192,68191,68190,68189,68188,68187,68186];

/* @var $this yii\web\View */
$countCars = \backend\models\Cars::find()->count();
$this->title = 'My Yii Application';
?>
<style>
    .car {
        margin-bottom: 20px;
    }
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


<div class="container">
    <div class="row">
        <?php foreach ($cars as $car) : ?>
            <div class="col-md-3 car">
                <h6 class="title-item">

                    <a href="<?= Url::to(['car/show', 'id' => $car['id']]); ?>" class="visited">
                        <?php $carName = CarMark::find()
                            ->select('name')
                            ->asArray()
                            ->where(['id_car_mark' => $car['mark']])->all();
                        echo $carName[0]['name'] ?> <?= $car['car_year'] ?>            </a>

                </h6>

                <img src="https://prodejvuz.cz/wp-content/uploads/thememakers/cardealer/34/<?=$imgRand[array_rand($imgRand)]?>/thumb/file0.jpg" alt="" class="img-responsive">

                <div class="price">

                <span>
                   <b><a href="<?= Url::to(['car/show', 'id' => $car['id']]); ?>"
                         class="visited"> <?= $car['car_price'] ?> </a></b>
                </span>

                </div>
                <ul class="list-entry">

                    <li>
                        <b>Adresa:</b><span>&nbsp;Středočeský kraj </span>
                    </li>

                    <li>
                        <b>Motor :</b><span>&nbsp;1968cm<sup>3</sup> 2.0TDI 103kw, Diesel</span>
                    </li>

                    <li>
                        <b>Najeto:</b><span>&nbsp; 229810 km</span>
                    </li>
                    <li>
                        <b>Rok výroby:</b><span>&nbsp;2008</span>
                    </li>
                </ul>
                <a href="<?= Url::to(['car/show', 'id' => $car['id']]); ?>" class="button btn btn-success">Detaily</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>



<?php
echo LinkPager::widget([
    'pagination' => $pages,
]);
?>
