<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_details".
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 *
 * @property Map[] $maps
 */
class UserDetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_details';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'phone'], 'required'],
            [['name', 'phone'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
        ];
    }

    /**
     * Gets query for [[Maps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaps()
    {
        return $this->hasMany(Map::class, ['id' => 'id']);
    }
    public function user($userid)
    {
        $user = Map::find()
        ->select('map.house_id,house_details.house_type,house_details.price,
        house_details.status,user_details.name,user_details.phone')
        ->innerJoin('house_details','house_details.House_id = map.house_id')
        ->innerJoin('user_details','user_details.id = map.id')         
        ->where(['map.id'=> $userid])  
        ->orderBy([ 'map_id' => SORT_DESC,])
   
        ->asArray()->all();
        return $user;
    }
}
