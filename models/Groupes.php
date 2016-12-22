<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "groupes".
 *
 * @property integer $groupe-cle
 * @property string $groupe-deno
 *
 * @property Chaines[] $chaines
 */
class Groupes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'groupes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['groupe-deno'], 'required'],
            [['groupe-deno'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'groupe-cle' => 'Clé',
            'groupe-deno' => 'Dénomination',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChaines()
    {
        return $this->hasMany(Chaines::className(), ['chaine-groupe' => 'groupe-cle']);
    }
}
