<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "regions".
 *
 * @property integer $region_id
 * @property string $region_name
 */
class Regions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'regions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_name'], 'required'],
            [['region_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'region_id' => 'Region ID',
            'region_name' => 'Region Name',
        ];
    }

}
