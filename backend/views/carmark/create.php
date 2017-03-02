<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CarMark */

$this->title = 'Create Car Mark';
$this->params['breadcrumbs'][] = ['label' => 'Car Marks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="car-mark-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
