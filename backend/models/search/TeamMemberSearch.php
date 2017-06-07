<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TeamMember;

/**
 * TeamMemberSearch represents the model behind the search form of `common\models\TeamMember`.
 */
class TeamMemberSearch extends TeamMember
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['row_id', 'team_id', 'user_id', 'team_leader', 'state'], 'integer'],
            [['apply_state', 'apply_message', 'tbl_user_infocol1', 'create_time', 'creator', 'update_time', 'updator'], 'safe'],
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
        $query = TeamMember::find();

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
            'team_id' => $this->team_id,
            'user_id' => $this->user_id,
            'team_leader' => $this->team_leader,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'apply_state', $this->apply_state])
            ->andFilterWhere(['like', 'apply_message', $this->apply_message])
            ->andFilterWhere(['like', 'tbl_user_infocol1', $this->tbl_user_infocol1])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'updator', $this->updator]);

        return $dataProvider;
    }
}
