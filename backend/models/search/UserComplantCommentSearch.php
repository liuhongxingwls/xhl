<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UserComplant;

/**
 * UserComplantCommentSearch represents the model behind the search form of `common\models\UserComplant`.
 */
class UserComplantCommentSearch extends UserComplant
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'complant_id', 'state'], 'integer'],
            [['complant_type', 'content_type', 'content', 'tbl_user_collectcol', 'tbl_user_infocol1', 'create_time', 'creator', 'update_time', 'updator'], 'safe'],
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
        $query = UserComplant::find();

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
            'user_id' => $this->user_id,
            'complant_id' => $this->complant_id,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'complant_type', $this->complant_type])
            ->andFilterWhere(['like', 'content_type', $this->content_type])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'tbl_user_collectcol', $this->tbl_user_collectcol])
            ->andFilterWhere(['like', 'tbl_user_infocol1', $this->tbl_user_infocol1])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'updator', $this->updator]);

        return $dataProvider;
    }
}
