<?php

namespace backend\controllers;

use Yii;
use backend\models\Cars;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CarController implements the CRUD actions for Cars model.
 */
class CarController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Cars models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Cars::find()->where([
                'user_id' => Yii::$app->user->identity->getId()
            ]),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cars model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Cars model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cars();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Cars model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if (!Yii::$app->user->can('updateOwnPost', ['post' => $model])) {
            throw new ForbiddenHttpException("Вам сюда нельзя!");
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Cars model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        if (!Yii::$app->user->can('deleteOwnPost', ['post' => $model])) {
            throw new ForbiddenHttpException("Вам сюда нельзя!");
        }
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Cars model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cars the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cars::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionTest() {

           for ( $i = 0; $i < 50; $i++ ) {
               $model = new Cars();
               $model->car_condition = 'New';
               $model->car_region = 2;
               $model->car_city = 1;
               $model->mark = 18;
               $model->model = 150;
               $model->car_body = 3;
               $model->car_price = 10000;
               $model->car_fuel_type = 2;
               $model->car_owner_number = 2;
               $model->car_year = 2016;
               $model->car_sale_type = 1;
               $model->car_doors_count = 4;
               $model->car_engine_size = 3000;
               $model->car_engine_additional = 'MDI 241';
               $model->car_vin = 1904158405;
               $model->car_phone = 505840540;
               $model->car_power_hp = 4400;
               $model->car_gearbox_type = 1;
               $model->car_number_gears = 5;
               $model->car_fuel_city_100km = 6;
               $model->car_fuel_highway_100km = 7;
               $model->car_fuel_combined_100km = 8;
               $model->car_environmental_standard = 5;
               $model->car_volume_tank = 80;
               $model->car_is_featured = 0;
               $model->autobaza = 'SuperBaza';
               $model->save();
           }
    }
}
