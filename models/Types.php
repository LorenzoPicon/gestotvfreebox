<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "types".
 *
 * @property integer $type-cle
 * @property string $type-denomination
 */
class Types extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'types';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type-denomination'], 'required'],
            [['type-denomination'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type-cle' => 'Type Cle',
            'type-denomination' => 'Type Denomination',
        ];
    }
}
