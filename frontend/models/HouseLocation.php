<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "house_location".
 *
 * @property int $location_id
 *  @property string $locality
 * @property string $city
 * @property string $state
 * @property int $pin
 */
class HouseLocation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'house_location';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['locality', 'city', 'state', 'pin'], 'required'],
            [['pin'], 'integer'],
            [['city'], 'integer'],
            [['state'], 'integer'],
            [['locality', ], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'location_id' => 'Location ID',
            'locality' => 'Locality',
            'city' => 'City',
            'state' => 'State',
            'pin' => 'Pin',
        ];
    }
    
}
