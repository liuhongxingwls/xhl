<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TeamInfo;

/**
 * TeamInfoSearch represents the model behind the search form of `common\models\TeamInfo`.
 */
class TeamInfoSearch extends TeamInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['team_id', 'member_count', 'will_cost', 'will_bar', 'member_exist', 'state'], 'integer'],
            [['team_name', 'start_time', 'bar_type', 'member_limit', 'pay_mode', 'team_message', 'team_state', 'conversation_id', 'tbl_user_infocol1', 'create_time', 'creator', 'update_time', 'updator'], 'safe'],
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
        $query = TeamInfo::find();

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
            'team_id' => $this->team_id,
            'start_time' => $this->start_time,
            'member_count' => $this->member_count,
            'will_cost' => $this->will_cost,
            'will_bar' => $this->will_bar,
            'member_exist' => $this->member_exist,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'team_name', $this->team_name])
            ->andFilterWhere(['like', 'bar_type', $this->bar_type])
            ->andFilterWhere(['like', 'member_limit', $this->member_limit])
            ->andFilterWhere(['like', 'pay_mode', $this->pay_mode])
            ->andFilterWhere(['like', 'team_message', $this->team_message])
            ->andFilterWhere(['like', 'team_state', $this->team_state])
            ->andFilterWhere(['like', 'conversation_id', $this->conversation_id])
            ->andFilterWhere(['like', 'tbl_user_infocol1', $this->tbl_user_infocol1])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'updator', $this->updator]);

        return $dataProvider;
    }
}
