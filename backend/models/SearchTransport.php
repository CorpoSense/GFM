<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Transport;

/**
 * SearchTransport represents the model behind the search form of `app\models\Transport`.
 */
class SearchTransport extends Transport
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transportId', 'typeTransport'], 'safe'],
            [['valeur'], 'number'],
            [['missionId'], 'integer'],
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
        $query = Transport::find();

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
            'valeur' => $this->valeur,
            'missionId' => $this->missionId,
        ]);

        $query->andFilterWhere(['like', 'transportId', $this->transportId])
            ->andFilterWhere(['like', 'typeTransport', $this->typeTransport]);

        return $dataProvider;
    }
}
