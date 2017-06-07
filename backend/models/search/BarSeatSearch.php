<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BarSeat;

/**
 * BarSeatSearch represents the model behind the search form of `common\models\BarSeat`.
 */
class BarSeatSearch extends BarSeat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bar_id', 'accept_reserve', 'is_noseat', 'state'], 'integer'],
            [['seat_type', 'seat_detail', 'seat_pic', 'tbl_user_login_infocol', 'tbl_user_login_infocol1', 'create_time', 'creator', 'update_time', 'updator'], 'safe'],
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
        $query = BarSeat::find();

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
            'bar_id' => $this->bar_id,
            'accept_reserve' => $this->accept_reserve,
            'is_noseat' => $this->is_noseat,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'seat_type', $this->seat_type])
            ->andFilterWhere(['like', 'seat_detail', $this->seat_detail])
            ->andFilterWhere(['like', 'seat_pic', $this->seat_pic])
            ->andFilterWhere(['like', 'tbl_user_login_infocol', $this->tbl_user_login_infocol])
            ->andFilterWhere(['like', 'tbl_user_login_infocol1', $this->tbl_user_login_infocol1])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'updator', $this->updator]);

        return $dataProvider;
    }
}
