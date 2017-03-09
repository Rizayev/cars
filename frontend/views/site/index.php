<?php

/* @var $this yii\web\View */
$countCars = \backend\models\Cars::find()->count();
$this->title = 'My Yii Application';
$jsCode = <<<JS

$('#car-mark').change(function () { 
    var value = $(this).val();
    $.ajax({
        url: '/get-model',
        type: 'GET',
        cache: true,
        dataType: 'json',
        data: {
          id: value  
        },
        success: function(data) {
          $('#car-model option').remove();
            
            for (var i = 0; i < data.length; i++){
                $('#car-model')
                      .append($('<option>', { value : data[i].name })
                      .text(data[i].name)); 
            }
         }
    });
});

JS;

$this->registerJs($jsCode);
?>
<style>
    input, select {
        width: 100%;
        margin-bottom: 20px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <fieldset>Okres:</fieldset>
            <select name="">
                <option value="">Disable</option>
            </select>
        </div>
        <div class="col-md-2">
            <fieldset>Stav:</fieldset>
            <select name="">
                <option value="">Disable</option>
            </select>
        </div>
        <div class="col-md-2">
            <fielset>Značka:</fielset>
            <select name="" id="car-mark">
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
            <select name="" id="car-model">
                <option value="">Disable</option>
            </select>
        </div>
        <div class="col-md-2">
            <fieldset>Cena (Kč) od:</fieldset>
            <select name="">
                <option value="">Disable</option>
            </select>
        </div>
        <div class="col-md-2">
            <fieldset>Cena (Kč) do:</fieldset>
            <select name="">
                <option value="">Disable</option>
            </select>
        </div>
        <div class="col-md-2">
            <fieldset>Palivo</fieldset>
            <select name="">
                <option value="">Disable</option>
            </select>
        </div>
        <div class="col-md-2">
            <fieldset>Převodovka</fieldset>
            <select name="">
                <option value="">Disable</option>
            </select>
        </div>

        <div class="col-md-2">
            <fieldset>Rok výroby od:</fieldset>
            <select name="">
                <option value="">Disable</option>
            </select>
        </div>
        <div class="col-md-2">
            <fieldset>Rok výroby do:</fieldset>
            <select name="">
                <option value="">Disable</option>
            </select>
        </div>
        <div class="col-md-2">
            <fieldset>Karoserie</fieldset>
            <select name="">
                <option value="">Disable</option>
            </select>
        </div>
        <div class="col-md-2">
            <fieldset>Cars Count:</fieldset>
             <b><?=$countCars?></b>
        </div>
    </div>
</div>
