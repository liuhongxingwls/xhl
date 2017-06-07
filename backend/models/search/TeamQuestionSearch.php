<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TeamQuestion;

/**
 * TeamQuestionSearch represents the model behind the search form of `common\models\TeamQuestion`.
 */
class TeamQuestionSearch extends TeamQuestion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question_id', 'state'], 'integer'],
            [['question_type', 'question_message', 'question_detail', 'question_generation', 'left_answer', 'right_answer', 'tbl_question_infocol', 'tbl_question_infocol1', 'create_time', 'creator', 'update_time', 'updator'], 'safe'],
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
        $query = TeamQuestion::find();

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
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'question_type', $this->question_type])
            ->andFilterWhere(['like', 'question_message', $this->question_message])
            ->andFilterWhere(['like', 'question_detail', $this->question_detail])
            ->andFilterWhere(['like', 'question_generation', $this->question_generation])
            ->andFilterWhere(['like', 'left_answer', $this->left_answer])
            ->andFilterWhere(['like', 'right_answer', $this->right_answer])
            ->andFilterWhere(['like', 'tbl_question_infocol', $this->tbl_question_infocol])
            ->andFilterWhere(['like', 'tbl_question_infocol1', $this->tbl_question_infocol1])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'updator', $this->updator]);

        return $dataProvider;
    }
}
