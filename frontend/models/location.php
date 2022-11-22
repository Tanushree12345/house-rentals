<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\houselocation;

/**
 * location represents the model behind the search form of `app\models\houselocation`.
 */
class location extends houselocation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['location_id', 'pin'], 'integer'],
            [['locality', 'city', 'state'], 'safe'],
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
        $query = houselocation::find();

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
            'location_id' => $this->location_id,
            'pin' => $this->pin,
        ]);

        $query->andFilterWhere(['like', 'locality', $this->locality])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state', $this->state]);

        return $dataProvider;
    }
}
