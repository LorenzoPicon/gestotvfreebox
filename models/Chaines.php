<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chaines".
 *
 * @property integer $chaine-cle
 * @property string $chaine-deno
 * @property string $chaine-IDTV
 * @property integer $chaine-BD
 * @property integer $chaine-ST
 * @property integer $chaine-HD
 * @property string $chaine-logo
 * @property string $chaine-flux
 * @property integer $chaine-choisie
 * @property integer $chaine-free
 * @property integer $chaine-ok
 * @property integer $chaine-groupe
 *
 * @property Groupes $chaine-groupe0
 */
class Chaines extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chaines';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['chaine-deno', 'chaine-IDTV', 'chaine-logo', 'chaine-flux'], 'required'],
            [['chaine-deno', 'chaine-IDTV', 'chaine-logo', 'chaine-flux'], 'string'],
            [['chaine-BD', 'chaine-ST', 'chaine-HD', 'chaine-choisie', 'chaine-free', 'chaine-ok', 'chaine-groupe'], 'integer'],
            [['chaine-groupe'], 'exist', 'skipOnError' => true, 'targetClass' => Groupes::className(), 'targetAttribute' => ['chaine-groupe' => 'groupe-cle']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'chaine-cle' => 'Clé',
            'chaine-deno' => 'Dénomination',
            'chaine-IDTV' => 'IDTV',
            'chaine-BD' => 'BD',
            'chaine-ST' => 'ST',
            'chaine-HD' => 'HD',
            'chaine-logo' => 'Logo',
            'chaine-flux' => 'Flux',
            'chaine-choisie' => 'Choisie',
            'chaine-free' => 'FreeTV',
            'chaine-ok' => 'Ok',
            'chaine-groupe' => 'Groupe',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChaine-groupe0()
    {
        return $this->hasOne(Groupes::className(), ['groupe-cle' => 'chaine-groupe']);
    }
}
