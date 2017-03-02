<?php

/* @var $this yii\web\View */

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

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <select name="" id="car-mark">
                <?php for ($i = 0; $i < count($carMark); $i++): ?>

                    <option value="<?=$carMark[$i]['id_car_mark']?>"><?=$carMark[$i]['name']?></option>

                <?php endfor;?>
            </select>
        </div>

        <div class="col-md-2">
<!--            <select name="" id="">-->
<!--                --><?php //for ($i = 0; $i < count($carModel); $i++): ?>
<!---->
<!--                    <option data-id-model="--><?//=$carModel[$i]['id_car_model']?><!--" value="--><?//=$carModel[$i]['name']?><!--">--><?//=$carModel[$i]['name']?><!--</option>-->
<!---->
<!--                --><?php //endfor;?>
<!--            </select>-->

            <select name="" id="car-model">
                <option value="">Disable</option>
            </select>
        </div>
    </div>
</div>
