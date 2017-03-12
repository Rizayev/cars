<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "car_fuel_type".
 *
 * @property integer $id_fuel
 * @property string $car_fuel_name
 */
class CarFuelType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car_fuel_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car_fuel_name'], 'required'],
            [['car_fuel_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_fuel' => 'Id Fuel',
            'car_fuel_name' => 'Car Fuel Name',
        ];
    }
}
