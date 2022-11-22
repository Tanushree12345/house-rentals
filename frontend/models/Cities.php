<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cities".
 *
 * @property int $city_id
 * @property string $city
 * @property int $state_id
 *
 * @property StateList $state
 */
class Cities extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['city_id', 'city', 'state_id'], 'required'],
            [['city_id', 'state_id'], 'integer'],
            [['city'], 'string', 'max' => 30],
            [['city_id'], 'unique'],
            [['state_id'], 'exist', 'skipOnError' => true, 'targetClass' => StateList::className(), 'targetAttribute' => ['state_id' => 'state_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'city_id' => 'City ID',
            'city' => 'City',
            'state_id' => 'State ID',
        ];
    }

    /**
     * Gets query for [[State]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(StateList::className(), ['state_id' => 'state_id']);
    }
    public static function getCity(){
        return self::find()->select(['city','city_id'])->indexBy('city_id')->column();
    }
    public static function dropdown(){
        static $dropdown;
        if ($dropdown===null) {
           $model = static::find()->all();
           foreach($model as $data ){
              $dropdown[$data->city_id]=$data->city;
           }
        }
        return $dropdown;
    }
}
