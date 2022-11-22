<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "map".
 *
 * @property int $House_id
 * @property int $id
 *
 * @property HouseDetails $house
 * @property UserDetails $id0
 */
class Map extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'map';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['House_id', 'id'], 'required'],
            [['House_id', 'id'], 'integer'],
            [['House_id'], 'exist', 'skipOnError' => true, 'targetClass' => HouseDetails::class, 'targetAttribute' => ['House_id' => 'House_id']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => UserDetails::class, 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'House_id' => 'House ID',
            'id' => 'ID',
        ];
    }

    /**
     * Gets query for [[House]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHouse()
    {
        return $this->hasOne(HouseDetails::class, ['House_id' => 'House_id']);
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId()
    {
        return $this->hasOne(UserDetails::class, ['id' => 'id']);
    }
    public function Book(){
        $model = User::find()
        ->select('id,username,email')
        ->orderBy([ 'id' => SORT_ASC,])
        ->from('user')
             
       // ->where(['user_details.name' ])
      //  ->andWhere(['status'=>'Booked'])
 
     
    
        ->asArray()->all();
        return $model;
        
     
    }
    public function own(){
        $model = User::find()
    
        ->select('user.username,,map.house_id,house_details.house_type,house_details.price,
        house_details.status,user_details.name,user_details.phone')
        ->innerJoin('map','user.id=map.id')
        ->innerJoin('house_details','house_details.House_id = map.house_id')
        ->innerJoin('user_details','user_details.id = map.id')  
     
        ->from('user') 
        ->column();
        
        $mobile = implode(",", $model);

        
        return $model;
        
     
    }
}
