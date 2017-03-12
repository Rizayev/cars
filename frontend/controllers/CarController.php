<?php

namespace frontend\controllers;

use backend\models\Cars;
use backend\models\City;
use yii\data\Pagination;
use backend\models\CarModel;
use yii\helpers\Json;

class CarController extends \yii\web\Controller {
    public function actionIndex() {

        $query = Cars::find()
            ->asArray()
            ->limit(9);

        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 10]);
        $models = $query->offset($pages->offset)
            ->limit(12)
            ->all();

        return $this->render('index', [
            'cars' => $models,
            'pages' => $pages,
        ]);
    }


    public function actionShow($id) {

        $car = Cars::find()->where(['id' => $id])->asArray()->one();

        return $this->render(('show'), compact('car'));
    }

    public function actionGetModel($id) {
        $carModel = CarModel::find()
            ->select('name,id_car_model')
            ->where(['id_car_mark' => $id])
            ->asArray()
            ->all();

//        return json_encode($carModel);
        return Json::encode($carModel);
    }

    public function actionGetCity($id) {
        $carCity = City::find()
            ->where(['region_id' => $id])
            ->asArray()
            ->all();

//        return json_encode($carModel);
        return Json::encode($carCity);
    }
}
