<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transport".
 *
 * @property string $transportId
 * @property string $typeTransport
 * @property string $valeur
 * @property int $missionId
 *
 * @property Mission $mission
 */
class Transport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transport';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transportId', 'typeTransport', 'valeur', 'missionId'], 'required'],
            [['valeur'], 'number'],
            [['missionId'], 'integer'],
            [['transportId', 'typeTransport'], 'string', 'max' => 255],
            [['transportId'], 'unique'],
            [['missionId'], 'exist', 'skipOnError' => true, 'targetClass' => Mission::className(), 'targetAttribute' => ['missionId' => 'missionId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'transportId' => 'Transport ID',
            'typeTransport' => 'Type Transport',
            'valeur' => 'Valeur',
            'missionId' => 'Mission ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMission()
    {
        return $this->hasOne(Mission::className(), ['missionId' => 'missionId']);
    }
}
