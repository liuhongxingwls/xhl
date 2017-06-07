<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PartySignup;

/**
 * PartySignupSearch represents the model behind the search form of `common\models\PartySignup`.
 */
class PartySignupSearch extends PartySignup
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['row_id', 'party_id', 'user_id', 'member_count', 'state'], 'integer'],
            [['real_name', 'phone_number', 'sign_time', 'pay_state', 'pay_mode', 'tbl_team_infocol', 'tbl_user_infocol1', 'create_time', 'creator', 'update_time', 'updator'], 'safe'],
            [['should_pay'], 'number'],
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
        $query = PartySignup::find();

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
            'row_id' => $this->row_id,
            'party_id' => $this->party_id,
            'user_id' => $this->user_id,
            'member_count' => $this->member_count,
            'sign_time' => $this->sign_time,
            'should_pay' => $this->should_pay,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'real_name', $this->real_name])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'pay_state', $this->pay_state])
            ->andFilterWhere(['like', 'pay_mode', $this->pay_mode])
            ->andFilterWhere(['like', 'tbl_team_infocol', $this->tbl_team_infocol])
            ->andFilterWhere(['like', 'tbl_user_infocol1', $this->tbl_user_infocol1])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'updator', $this->updator]);

        return $dataProvider;
    }
}
