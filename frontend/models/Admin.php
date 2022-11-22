<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property string $uname
 * @property string $password
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uname', 'password'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'uname' => 'Uname',
            'password' => 'Password',
        ];
    }
}
