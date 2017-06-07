<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TeamAnswer;

/**
 * TeamAnswerSearch represents the model behind the search form of `common\models\TeamAnswer`.
 */
class TeamAnswerSearch extends TeamAnswer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question_id', 'user_id', 'answer', 'state'], 'integer'],
            [['tbl_user_login_infocol', 'tbl_user_login_infocol1', 'creator', 'create_time', 'updator', 'update_time'], 'safe'],
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
        $query = TeamAnswer::find();

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
            'question_id' => $this->question_id,
            'user_id' => $this->user_id,
            'answer' => $this->answer,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'tbl_user_login_infocol', $this->tbl_user_login_infocol])
            ->andFilterWhere(['like', 'tbl_user_login_infocol1', $this->tbl_user_login_infocol1])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'updator', $this->updator]);

        return $dataProvider;
    }
}
