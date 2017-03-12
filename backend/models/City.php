<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $city_id
 * @property integer $region_id
 * @property string $city_name
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_id'], 'integer'],
            [['city_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'city_id' => 'City ID',
            'region_id' => 'Region ID',
            'city_name' => 'City Name',
        ];
    }


}
