<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "state_list".
 *
 * @property int $state_id
 * @property string $state
 *
 * @property Cities[] $cities
 */
class StateList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'state_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['state_id', 'state'], 'required'],
            [['state_id'], 'integer'],
            [['state'], 'string', 'max' => 30],
            [['state_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'state_id' => 'State ID',
            'state' => 'State',
        ];
    }

    /**
     * Gets query for [[Cities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(Cities::className(), ['state_id' => 'state_id']);
    }
    public static function getState(){
        return self::find()->select(['state','state_id'])->indexBy('state_id')->column();
    }
    public static function dropdown(){
        static $dropdown;
        if ($dropdown===null) {
           $model = static::find()->all();
           foreach($model as $data ){
              $dropdown[$data->state_id]=$data->state;
           }
        }
        return $dropdown;
    }
}
