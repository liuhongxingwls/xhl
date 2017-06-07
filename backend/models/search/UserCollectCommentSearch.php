<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UserCollect;

/**
 * UserCollectCommentSearch represents the model behind the search form of `common\models\UserCollect`.
 */
class UserCollectCommentSearch extends UserCollect
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'collect_id', 'state'], 'integer'],
            [['collect_type', 'tbl_user_collectcol', 'tbl_user_infocol1', 'create_time', 'creator', 'update_time', 'updator'], 'safe'],
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
        $query = UserCollect::find();

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
            'collect_id' => $this->collect_id,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'collect_type', $this->collect_type])
            ->andFilterWhere(['like', 'tbl_user_collectcol', $this->tbl_user_collectcol])
            ->andFilterWhere(['like', 'tbl_user_infocol1', $this->tbl_user_infocol1])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'updator', $this->updator]);

        return $dataProvider;
    }
}
