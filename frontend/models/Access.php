<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "access".
 *
 * @property int $access_id
 * @property string $access_by
 */
class Access extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'access';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['access_by'], 'required'],
            [['access_by'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'access_id' => 'Access ID',
            'access_by' => 'Access By',
        ];
    }
}
