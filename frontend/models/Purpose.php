<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "purpose".
 *
 * @property int $purpose_id
 * @property string $purpose
 */
class Purpose extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'purpose';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['purpose'], 'required'],
            [['purpose'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'purpose_id' => 'Purpose ID',
            'purpose' => 'Purpose',
        ];
    }
}
