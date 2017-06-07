<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BarPay;

/**
 * BarPaySearch represents the model behind the search form of `common\models\BarPay`.
 */
class BarPaySearch extends BarPay
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'pay_mode', 'pay_state', 'tbl_user_login_infocol', 'tbl_user_login_infocol1', 'create_time', 'creator', 'update_time', 'updator'], 'safe'],
            [['reserve_id', 'user_id', 'bar_id', 'state'], 'integer'],
            [['original_price', 'discount', 'real_price'], 'number'],
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
        $query = BarPay::find();

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
            'original_price' => $this->original_price,
            'discount' => $this->discount,
            'real_price' => $this->real_price,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'order_id', $this->order_id])
            ->andFilterWhere(['like', 'pay_mode', $this->pay_mode])
            ->andFilterWhere(['like', 'pay_state', $this->pay_state])
            ->andFilterWhere(['like', 'tbl_user_login_infocol', $this->tbl_user_login_infocol])
            ->andFilterWhere(['like', 'tbl_user_login_infocol1', $this->tbl_user_login_infocol1])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'updator', $this->updator]);

        return $dataProvider;
    }
}
