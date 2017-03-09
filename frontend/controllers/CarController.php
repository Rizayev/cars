<?php

namespace frontend\controllers;

use backend\models\Cars;
use yii\data\Pagination;

class CarController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $query = Cars::find()
            ->asArray()
            ->limit(9);

        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 10]);
        $models = $query->offset($pages->offset)
            ->limit(12)
            ->all();

        return $this->render( 'index', [
            'cars' => $models,
            'pages' => $pages,
        ]);
    }


    public function actionShow($id)
    {

        $car = Cars::find()->where(['id'=>$id])->asArray()->one();

        return $this->render( ('show'), compact('car') );
    }
}
