<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ShowInfo;

/**
 * ShowInfoSearch represents the model behind the search form of `common\models\ShowInfo`.
 */
class ShowInfoSearch extends ShowInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['row_id', 'musician_id', 'bar_id', 'state'], 'integer'],
            [['show_date', 'start_time', 'end_time', 'tbl_user_login_infocol', 'tbl_user_login_infocol1', 'create_time', 'creator', 'update_time', 'updator'], 'safe'],
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
        $query = ShowInfo::find();

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
            'musician_id' => $this->musician_id,
            'bar_id' => $this->bar_id,
            'show_date' => $this->show_date,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
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
