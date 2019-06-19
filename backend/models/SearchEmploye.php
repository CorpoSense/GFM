<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Employe;

/**
 * SearchEmploye represents the model behind the search form of `app\models\Employe`.
 */
class SearchEmploye extends Employe
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employeId'], 'integer'],
            [['nomPersonel', 'grade', 'emploi', 'indice', 'groupe', 'categorie'], 'safe'],
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
        $query = Employe::find();

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
            'employeId' => $this->employeId,
        ]);

        $query->andFilterWhere(['like', 'nomPersonel', $this->nomPersonel])
            ->andFilterWhere(['like', 'grade', $this->grade])
            ->andFilterWhere(['like', 'emploi', $this->emploi])
            ->andFilterWhere(['like', 'indice', $this->indice])
            ->andFilterWhere(['like', 'groupe', $this->groupe])
            ->andFilterWhere(['like', 'categorie', $this->categorie]);

        return $dataProvider;
    }
}
