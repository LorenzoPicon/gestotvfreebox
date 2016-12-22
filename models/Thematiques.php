<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "thematiques".
 *
 * @property integer $thematique-cle
 * @property string $thematique-denomination
 */
class Thematiques extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'thematiques';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['thematique-denomination'], 'required'],
            [['thematique-denomination'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'thematique-cle' => 'Thematique Cle',
            'thematique-denomination' => 'Thematique Denomination',
        ];
    }
}
