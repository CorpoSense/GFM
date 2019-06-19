<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parcours".
 *
 * @property int $parcoursId
 * @property string $codeRegion
 * @property string $remarque
 * @property int $missionId
 *
 * @property Region $codeRegion0
 * @property Mission $mission
 * @property Mission $mission0
 */
class Parcours extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parcours';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parcoursId', 'codeRegion', 'remarque', 'missionId'], 'required'],
            [['parcoursId', 'missionId'], 'integer'],
            [['remarque'], 'string'],
            [['codeRegion'], 'string', 'max' => 255],
            [['parcoursId'], 'unique'],
            [['codeRegion'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['codeRegion' => 'codeRegion']],
            [['missionId'], 'exist', 'skipOnError' => true, 'targetClass' => Mission::className(), 'targetAttribute' => ['missionId' => 'missionId']],
            [['missionId'], 'exist', 'skipOnError' => true, 'targetClass' => Mission::className(), 'targetAttribute' => ['missionId' => 'missionId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'parcoursId' => 'Parcours ID',
            'codeRegion' => 'Code Region',
            'remarque' => 'Remarque',
            'missionId' => 'Mission ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodeRegion0()
    {
        return $this->hasOne(Region::className(), ['codeRegion' => 'codeRegion']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMission()
    {
        return $this->hasOne(Mission::className(), ['missionId' => 'missionId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMission0()
    {
        return $this->hasOne(Mission::className(), ['missionId' => 'missionId']);
    }
}
