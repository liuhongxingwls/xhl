<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BarReserve;

/**
 * BarReserveSearch represents the model behind the search form of `common\models\BarReserve`.
 */
class BarReserveSearch extends BarReserve
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reserve_id', 'user_id', 'bar_id', 'member_count', 'state'], 'integer'],
            [['seat_type', 'reserve_time', 'real_name', 'phone_number', 'reserve_state', 'tbl_bar_reservecol', 'tbl_user_login_infocol', 'tbl_user_login_infocol1', 'create_time', 'creator', 'update_time', 'updator'], 'safe'],
            [['user_cost'], 'number'],
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
        $query = BarReserve::find();

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
            'reserve_id' => $this->reserve_id,
            'user_id' => $this->user_id,
            'bar_id' => $this->bar_id,
            'reserve_time' => $this->reserve_time,
            'member_count' => $this->member_count,
            'user_cost' => $this->user_cost,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'seat_type', $this->seat_type])
            ->andFilterWhere(['like', 'real_name', $this->real_name])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'reserve_state', $this->reserve_state])
            ->andFilterWhere(['like', 'tbl_bar_reservecol', $this->tbl_bar_reservecol])
            ->andFilterWhere(['like', 'tbl_user_login_infocol', $this->tbl_user_login_infocol])
            ->andFilterWhere(['like', 'tbl_user_login_infocol1', $this->tbl_user_login_infocol1])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'updator', $this->updator]);

        return $dataProvider;
    }
}
