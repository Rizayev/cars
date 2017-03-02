<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CarMark */

$this->title = 'Update Car Mark: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Car Marks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_car_mark]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="car-mark-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
