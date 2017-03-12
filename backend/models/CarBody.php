<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "car_body".
 *
 * @property integer $id_body
 * @property string $car_body_name
 */
class CarBody extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car_body';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car_body_name'], 'required'],
            [['car_body_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_body' => 'Id Body',
            'car_body_name' => 'Car Body Name',
        ];
    }
}
