<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 * UsersSearch represents the model behind the search form of `app\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_id'], 'integer'],
            [['u_name', 'u_surname', 'u_e-mail', 'u_position', 'u_role', 'u_password'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Users::find();

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
            'u_id' => $this->u_id,
        ]);

        $query->andFilterWhere(['like', 'u_name', $this->u_name])
            ->andFilterWhere(['like', 'u_surname', $this->u_surname])
            ->andFilterWhere(['like', 'u_e-mail', $this->u_e-mail])
            ->andFilterWhere(['like', 'u_position', $this->u_position])
            ->andFilterWhere(['like', 'u_role', $this->u_role])
            ->andFilterWhere(['like', 'u_password', $this->u_password]);

        return $dataProvider;
    }
}
