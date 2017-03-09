<?php
/* @var $this yii\web\View */
use backend\models\CarMark;
?>
<?php
//print_r($car);
?>
<div class="container">
    <div class="row">
        <?php $carName = CarMark::find()
            ->select('name')
            ->asArray()
            ->where(['id_car_mark' => $car['mark']])->all();?>
        <div class="col-md-8">
            <?= $carName[0]['name'] . ' ' . $car['car_year']?>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="http://loremflickr.com/800/600" alt="...">
                    </div>
                    <div class="item">
                        <img src="http://loremflickr.com/800/600" alt="...">
                    </div>
                    <div class="item">
                        <img src="http://loremflickr.com/800/600" alt="...">
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-4">

            <div class="extra">
                <button class="button orange myprice" data-toggle="modal" data-target="#myModal">Nabídnout cenu</button>
                <h6>Cena:</h6>
                <div class="price">
                    <span class="" data-convert="78000"><?=$car['car_price']?> Kč</span>
                </div>

                <h6>Telefon:</h6>
                <span class="phone-number">
			<?=$car['car_phone']?>
			<a href="tel:"></a>
			</span>
                <h6>Informace:</h6>

                <ul class="type-car-position">
                    <li>
                        <b>Rok výroby : </b>
                        <span><?=$car['car_year']?></span></li>
                    <li>
                        <b>Najeto : </b>
                        <span>96800 km</span>
                    </li>
                    <li>
                        <b>Obsahu motoru : </b>
                        <span><?=$car['car_engine_size']?>cm<sup>3</sup></span>
                    </li>
                    <li>
                        <b>Typ motoru : </b>
                        <span class="engine-type"><?=$car['car_engine_additional']?></span></li>
                    <li>
                        <b>Převodovka : </b>
                        <span><?=$car['car_gearbox_type']?></span>
                    </li>
                    <li>
                        <b>Palivo : </b>
                        <span><?=$car['car_fuel_type']?></span>
                    </li>
                    <li>
                        <b>Karoserie : </b>
                        <span class="body-style"><?=$car['car_body']?></span>
                    </li>
                    <li>
                        <b>Dveře : </b>
                        <span><?=$car['car_doors_count']?></span>
                    </li>
                    <li>
                        <b>Počet vlastníků	: </b>
                        <span style="text-transform: lowercase;">2. vlastník</span>
                    </li>
                    <li>
                        <b>Prodejce : </b>
                        <span><?=$car['car_doors_count']?></span>
                    </li>
                    <!--
                    -->
                    <li>
                        <b>Stav : </b>
                        <span>ojeté</span>
                    </li>
                    <!--						<b>  : </b>-->
                    <span>Autobazar Zavadilka</span> <br>
                    <span>Pardubický kraj</span> <br>
                    <span>Hradec nad Svitavou</span> <br>
                    <span>Hradec nad Svitavou</span> <br>
                    <span>732388147, 607211161</span> <br>
                    <span>461548006</span> <br>
                    <span>zavadilka.auto@seznam.cz </span> <br>
                    <span>www.autosoft.cz/zavadilka</span> <br>
                    <span>Provozní doba :  Po - Pá: 09.00 - 17.00 hod,    So  09.00 - 16.00 hod,  Neděle zavřeno</span>

                </ul>

            </div>
            <!--/ .extra-->
        </div>
    </div>
</div>
