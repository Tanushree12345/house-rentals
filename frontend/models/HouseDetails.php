<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "house_details".
 *
 * @property int $House_id
 * @property string $house_type
 * @property string $available
 * @property int $location_id
 * @property int $price
 * @property string $purpose
 * @property string $access
 * @property int $status
 */
class HouseDetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'house_details';
    }
    const STATUS_INACTIVE = 'available';
    const STATUS_ACTIVE = 'booked';
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['House_id','house_type', 'available', 'location_id', 'price', 'purpose', 'access', 'status'], 'required'],
            [['location_id', 'price',], 'integer'],
            [['house_type', 'purpose', 'access', 'status'], 'string', 'max' => 30],
            [['available'], 'string', 'max' => 6],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'House_id' => 'House ID',
            'house_type' => 'House Type',
            'available' => 'Available',
            'location_id' => 'Location ID',
            'price' => 'Price',
            'purpose' => 'Purpose',
            'access' => 'Access',
            'status' => 'Status',
        ];
    }
    public function getHouse()
    {
        return $this->hasOne(HouseDetails::className(), ['id' => 'location_id']);
    }
    
    public function show($id)
    {
        $model =HouseDetails::find()
        ->select('house_details.house_type,house_details.price,
    house_location.locality,purpose.purpose,access.access_by,state_list.state,cities.city')
        ->from('house_details')
        ->innerJoin('house_location', 'house_details.location_id= house_location.location_id')
   
        ->innerJoin('purpose', 'house_details.purpose= purpose.purpose_id')
        ->innerJoin('access', 'house_details.access = access.access_id') 
        ->innerJoin('cities', 'house_location.city= cities.city_id')
        ->innerJoin('state_list','house_location.state=state_list.state_id')
        ->where(['house_details.location_id'=> $id])
         
        ->asArray()->all();
        return $model;  
    }
    
    public function house($id){
        $model =HouseDetails::find($id)
        ->select('house_details.House_id,house_details.house_type,house_details.price,house_details.status,
        house_location.locality,purpose.purpose,access.access_by,state_list.state,cities.city')
        ->from('house_details')
        ->innerJoin('house_location', 'house_details.location_id= house_location.location_id')
   
        ->innerJoin('purpose', 'house_details.purpose= purpose.purpose_id')
        ->innerJoin('access', 'house_details.access = access.access_id') 
        ->innerJoin('cities', 'house_location.city= cities.city_id')
        ->innerJoin('state_list','house_location.state=state_list.state_id')
        ->where(['house_details.location_id'=> $id])
        ->andWhere(['status'=>'0'])
        ->asArray()->all();
        return $model;
    }
    public function details(){
        $model =HouseDetails::find()
        ->select('house_details.house_type,house_details.price,house_details.status,
        ,house_location.locality,purpose.purpose,access.access_by,state_list.state,cities.city')
        ->from('house_details')
        ->innerJoin('house_location', 'house_details.location_id= house_location.location_id')
   
        ->innerJoin('purpose', 'house_details.purpose= purpose.purpose_id')
        ->innerJoin('access', 'house_details.access = access.access_id') 
        ->innerJoin('cities', 'house_location.city= cities.city_id')
        ->innerJoin('state_list','house_location.state=state_list.state_id')
        ->andWhere(['status'=> 'Booked'])
        ->orderBy([ 'house_details.house_id' => SORT_DESC,])
         
        ->asArray()->all();
     
        return $model;
      
    }
    public function allHouse(){
        $model =HouseDetails::find()
        ->select('house_details.house_type,house_details.price,house_details.status,
        ,house_location.locality,purpose.purpose,access.access_by,state_list.state,cities.city')
        ->from('house_details')
        ->innerJoin('house_location', 'house_details.location_id= house_location.location_id')
   
        ->innerJoin('purpose', 'house_details.purpose= purpose.purpose_id')
        ->innerJoin('access', 'house_details.access = access.access_id') 
        ->innerJoin('cities', 'house_location.city= cities.city_id')
        ->innerJoin('state_list','house_location.state=state_list.state_id')
       
        ->asArray()->all();
        return $model;
    }
    public function view($id){
      $model =HouseDetails::find()
         ->select('house_details.House_id,house_details.house_type,house_details.price,house_details.status,
         house_location.locality,purpose.purpose,access.access_by,state_list.state,cities.city')
         ->from('house_details')
         ->innerJoin('house_location', 'house_details.location_id= house_location.location_id')
    
         ->innerJoin('purpose', 'house_details.purpose= purpose.purpose_id')
         ->innerJoin('access', 'house_details.access = access.access_id') 
         ->innerJoin('cities', 'house_location.city= cities.city_id')
         ->innerJoin('state_list','house_location.state=state_list.state_id')
         ->where(['House_id'=> $id])
      
         ->asArray()->all();
         return $model;
    }
   
 
 
}
