<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "etatfrais".
 *
 * @property string $employeId
 * @property int $etatId
 * @property string $bareme
 * @property string $dateCreation
 *
 * @property Mission $etat
 */
class etatfrais extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'etatfrais';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employeId', 'etatId', 'bareme', 'dateCreation'], 'required'],
            [['etatId'], 'integer'],
            [['dateCreation'], 'safe'],
            [['employeId', 'bareme'], 'string', 'max' => 255],
            [['etatId'], 'unique'],
            [['etatId'], 'exist', 'skipOnError' => true, 'targetClass' => Mission::className(), 'targetAttribute' => ['etatId' => 'etatId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'employeId' => 'Employe ID',
            'etatId' => 'Etat ID',
            'bareme' => 'Bareme',
            'dateCreation' => 'Date Creation',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEtat()
    {
        return $this->hasOne(Mission::className(), ['etatId' => 'etatId']);
    }
}
