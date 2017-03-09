<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cars".
 *
 * @property integer $id
 * @property string $car_condition
 * @property integer $mark
 * @property integer $model
 * @property integer $car_body
 * @property integer $car_price
 * @property integer $car_fuel_type
 * @property integer $car_owner_number
 * @property integer $car_year
 * @property integer $car_sale_type
 * @property integer $car_doors_count
 * @property integer $car_engine_size
 * @property string $car_engine_additional
 * @property integer $car_vin
 * @property integer $car_carlocation
 * @property integer $car_phone
 * @property integer $car_power_hp
 * @property integer $car_gearbox_type
 * @property integer $car_number_gears
 * @property integer $car_fuel_city_100km
 * @property integer $car_fuel_highway_100km
 * @property integer $car_fuel_combined_100km
 * @property integer $car_environmental_standard
 * @property integer $car_volume_tank
 * @property integer $car_is_featured
 * @property string $autobaza
 */
class Cars extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cars';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car_condition', 'mark', 'model', 'car_body', 'car_price', 'car_fuel_type', 'car_owner_number', 'car_year', 'car_sale_type', 'car_doors_count', 'car_engine_size', 'car_engine_additional', 'car_vin', 'car_carlocation', 'car_phone', 'car_power_hp', 'car_gearbox_type', 'car_number_gears', 'car_fuel_city_100km', 'car_fuel_highway_100km', 'car_fuel_combined_100km', 'car_environmental_standard', 'car_volume_tank', 'car_is_featured', 'autobaza'], 'required'],
            [['mark', 'model', 'car_body', 'car_price', 'car_fuel_type', 'car_owner_number', 'car_year', 'car_sale_type', 'car_doors_count', 'car_engine_size', 'car_vin', 'car_carlocation', 'car_phone', 'car_power_hp', 'car_gearbox_type', 'car_number_gears', 'car_fuel_city_100km', 'car_fuel_highway_100km', 'car_fuel_combined_100km', 'car_environmental_standard', 'car_volume_tank', 'car_is_featured'], 'integer'],
            [['car_condition', 'car_engine_additional', 'autobaza'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'car_condition' => 'Car Condition',
            'mark' => 'Mark',
            'model' => 'Model',
            'car_body' => 'Car Body',
            'car_price' => 'Car Price',
            'car_fuel_type' => 'Car Fuel Type',
            'car_owner_number' => 'Car Owner Number',
            'car_year' => 'Car Year',
            'car_sale_type' => 'Car Sale Type',
            'car_doors_count' => 'Car Doors Count',
            'car_engine_size' => 'Car Engine Size',
            'car_engine_additional' => 'Car Engine Additional',
            'car_vin' => 'Car Vin',
            'car_carlocation' => 'Car Carlocation',
            'car_phone' => 'Car Phone',
            'car_power_hp' => 'Car Power Hp',
            'car_gearbox_type' => 'Car Gearbox Type',
            'car_number_gears' => 'Car Number Gears',
            'car_fuel_city_100km' => 'Car Fuel City 100km',
            'car_fuel_highway_100km' => 'Car Fuel Highway 100km',
            'car_fuel_combined_100km' => 'Car Fuel Combined 100km',
            'car_environmental_standard' => 'Car Environmental Standard',
            'car_volume_tank' => 'Car Volume Tank',
            'car_is_featured' => 'Car Is Featured',
            'autobaza' => 'Autobaza',
        ];
    }
}
