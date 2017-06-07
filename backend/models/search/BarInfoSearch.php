<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BarInfo;

/**
 * BarInfoSearch represents the model behind the search form of `common\models\BarInfo`.
 */
class BarInfoSearch extends BarInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bar_id', 'state'], 'integer'],
            [['bar_name', 'bar_city', 'bar_address', 'bar_phonenumber', 'bar_location', 'bar_detail', 'tbl_user_login_infocol', 'tbl_user_login_infocol1', 'create_time', 'creator', 'update_time', 'updator'], 'safe'],
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
        $query = BarInfo::find();

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
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'bar_name', $this->bar_name])
            ->andFilterWhere(['like', 'bar_city', $this->bar_city])
            ->andFilterWhere(['like', 'bar_address', $this->bar_address])
            ->andFilterWhere(['like', 'bar_phonenumber', $this->bar_phonenumber])
            ->andFilterWhere(['like', 'bar_location', $this->bar_location])
            ->andFilterWhere(['like', 'bar_detail', $this->bar_detail])
            ->andFilterWhere(['like', 'tbl_user_login_infocol', $this->tbl_user_login_infocol])
            ->andFilterWhere(['like', 'tbl_user_login_infocol1', $this->tbl_user_login_infocol1])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'updator', $this->updator]);

        return $dataProvider;
    }
}
