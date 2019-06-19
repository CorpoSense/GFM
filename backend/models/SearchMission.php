<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mission;

/**
 * SearchMission represents the model behind the search form of `app\models\Mission`.
 */
class SearchMission extends Mission
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['missionId', 'etatId', 'employeId'], 'integer'],
            [['reference', 'bis', 'residenceAdministrative', 'parcours', 'motifDeplacement', 'direction', 'dateDepart', 'heureDepart', 'dateRetour', 'heureRetour', 'moyenTransport', 'fraisTransport', 'dateEtabli', 'lieuEtabli', 'observation'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Mission::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'missionId' => $this->missionId,
            'dateDepart' => $this->dateDepart,
            'heureDepart' => $this->heureDepart,
            'dateRetour' => $this->dateRetour,
            'heureRetour' => $this->heureRetour,
            'dateEtabli' => $this->dateEtabli,
            'etatId' => $this->etatId,
            'employeId' => $this->employeId,
        ]);

        $query->andFilterWhere(['like', 'reference', $this->reference])
            ->andFilterWhere(['like', 'bis', $this->bis])
            ->andFilterWhere(['like', 'residenceAdministrative', $this->residenceAdministrative])
            ->andFilterWhere(['like', 'parcours', $this->parcours])
            ->andFilterWhere(['like', 'motifDeplacement', $this->motifDeplacement])
            ->andFilterWhere(['like', 'direction', $this->direction])
            ->andFilterWhere(['like', 'moyenTransport', $this->moyenTransport])
            ->andFilterWhere(['like', 'fraisTransport', $this->fraisTransport])
            ->andFilterWhere(['like', 'lieuEtabli', $this->lieuEtabli])
            ->andFilterWhere(['like', 'observation', $this->observation]);

        return $dataProvider;
    }
}
