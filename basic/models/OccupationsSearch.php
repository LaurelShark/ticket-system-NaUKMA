<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Occupations;

/**
 * OccupationsSearch represents the model behind the search form of `app\models\Occupations`.
 */
class OccupationsSearch extends Occupations
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['o_id'], 'integer'],
            [['o_date', 'o_starttime', 'o_endtime'], 'safe'],
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
        $query = Occupations::find();

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
            'o_id' => $this->o_id,
            'o_date' => $this->o_date,
            'o_starttime' => $this->o_starttime,
            'o_endtime' => $this->o_endtime,
        ]);

        return $dataProvider;
    }
}
