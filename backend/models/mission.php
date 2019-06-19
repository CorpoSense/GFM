<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mission".
 *
 * @property int $missionId
 * @property string $reference
 * @property string $bis
 * @property string $residenceAdministrative
 * @property string $parcours
 * @property string $motifDeplacement
 * @property string $direction
 * @property string $dateDepart
 * @property string $heureDepart
 * @property string $dateRetour
 * @property string $heureRetour
 * @property string $moyenTransport
 * @property string $fraisTransport
 * @property string $dateEtabli
 * @property string $lieuEtabli
 * @property string $observation
 * @property int $etatId
 * @property int $employeId
 *
 * @property Etatfrais $etatfrais
 * @property Employe $employe
 * @property Parcours[] $parcours0
 * @property Parcours[] $parcours1
 * @property Transport[] $transports
 */
class mission extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mission';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['missionId', 'reference', 'bis', 'residenceAdministrative', 'parcours', 'motifDeplacement', 'direction', 'dateDepart', 'heureDepart', 'dateRetour', 'heureRetour', 'moyenTransport', 'fraisTransport', 'dateEtabli', 'lieuEtabli', 'observation', 'etatId', 'employeId'], 'required'],
            [['missionId', 'etatId', 'employeId'], 'integer'],
            [['dateDepart', 'heureDepart', 'dateRetour', 'heureRetour', 'dateEtabli'], 'safe'],
            [['reference', 'bis', 'residenceAdministrative', 'parcours', 'motifDeplacement', 'direction', 'moyenTransport', 'fraisTransport', 'lieuEtabli', 'observation'], 'string', 'max' => 255],
            [['missionId'], 'unique'],
            [['employeId'], 'exist', 'skipOnError' => true, 'targetClass' => Employe::className(), 'targetAttribute' => ['employeId' => 'employeId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'missionId' => 'Mission ID',
            'reference' => 'Reference',
            'bis' => 'Bis',
            'residenceAdministrative' => 'Residence Administrative',
            'parcours' => 'Parcours',
            'motifDeplacement' => 'Motif Deplacement',
            'direction' => 'Direction',
            'dateDepart' => 'Date Depart',
            'heureDepart' => 'Heure Depart',
            'dateRetour' => 'Date Retour',
            'heureRetour' => 'Heure Retour',
            'moyenTransport' => 'Moyen Transport',
            'fraisTransport' => 'Frais Transport',
            'dateEtabli' => 'Date Etabli',
            'lieuEtabli' => 'Lieu Etabli',
            'observation' => 'Observation',
            'etatId' => 'Etat ID',
            'employeId' => 'Employe ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEtatfrais()
    {
        return $this->hasOne(Etatfrais::className(), ['etatId' => 'etatId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmploye()
    {
        return $this->hasOne(Employe::className(), ['employeId' => 'employeId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParcours0()
    {
        return $this->hasMany(Parcours::className(), ['missionId' => 'missionId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParcours1()
    {
        return $this->hasMany(Parcours::className(), ['missionId' => 'missionId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransports()
    {
        return $this->hasMany(Transport::className(), ['missionId' => 'missionId']);
    }
}
