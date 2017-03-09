<?php
/* @var $this yii\web\View */
use backend\models\CarMark;
use yii\helpers\Url;
use yii\widgets\LinkPager;
$imgRand = [68207,68208,68208,68204,68202,68201,68199,68198,68197,68196,68195,68194,68193,68192,68191,68190,68189,68188,68187,68186];
?>
<style>
    .car {
        margin-bottom: 20px;
    }
</style>
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
