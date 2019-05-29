<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employe".
 *
 * @property int $employeId
 * @property string $nomPersonel
 * @property string $grade
 * @property string $emploi
 * @property string $indice
 * @property string $groupe
 * @property string $categorie
 *
 * @property Mission[] $missions
 */
class Employe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employeId', 'nomPersonel', 'grade', 'emploi', 'indice', 'groupe', 'categorie'], 'required'],
            [['employeId'], 'integer'],
            [['nomPersonel', 'grade', 'emploi', 'indice', 'groupe', 'categorie'], 'string', 'max' => 255],
            [['employeId'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'employeId' => 'Employe ID',
            'nomPersonel' => 'Nom Personel',
            'grade' => 'Grade',
            'emploi' => 'Emploi',
            'indice' => 'Indice',
            'groupe' => 'Groupe',
            'categorie' => 'Categorie',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMissions()
    {
        return $this->hasMany(Mission::className(), ['employeId' => 'employeId']);
    }
}
