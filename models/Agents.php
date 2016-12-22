<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agents".
 *
 * @property integer $agent-cle
 * @property string $agent-nom
 */
class Agents extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['agent-nom'], 'required'],
            [['agent-nom'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'agent-cle' => 'Agent Cle',
            'agent-nom' => 'Agent Nom',
        ];
    }
}
