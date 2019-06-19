<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property string $codeRegion
 * @property string $nomRegion
 * @property string $direction
 *
 * @property Parcours[] $parcours
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codeRegion', 'nomRegion', 'direction'], 'required'],
            [['codeRegion', 'nomRegion', 'direction'], 'string', 'max' => 255],
            [['codeRegion'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codeRegion' => 'Code Region',
            'nomRegion' => 'Nom Region',
            'direction' => 'Direction',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParcours()
    {
        return $this->hasMany(Parcours::className(), ['codeRegion' => 'codeRegion']);
    }
}
