<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rooms;

/**
 * RoomsSearch represents the model behind the search form of `app\models\Rooms`.
 */
class RoomsSearch extends Rooms
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_id', 'room_capacity'], 'integer'],
            [['room_naming', 'room_location', 'room_features'], 'safe'],
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
        $query = Rooms::find();

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
            'room_id' => $this->room_id,
            'room_capacity' => $this->room_capacity,
        ]);

        $query->andFilterWhere(['like', 'room_naming', $this->room_naming])
            ->andFilterWhere(['like', 'room_location', $this->room_location])
            ->andFilterWhere(['like', 'room_features', $this->room_features]);

        return $dataProvider;
    }
}
