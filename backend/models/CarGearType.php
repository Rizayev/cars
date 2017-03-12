<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "car_gear_type".
 *
 * @property integer $id_gear
 * @property string $car_gear_name
 */
class CarGearType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car_gear_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car_gear_name'], 'required'],
            [['car_gear_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_gear' => 'Id Gear',
            'car_gear_name' => 'Car Gear Name',
        ];
    }
}
