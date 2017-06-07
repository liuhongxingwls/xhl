<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PartyInfo;

/**
 * PartyInfoSearch represents the model behind the search form of `common\models\PartyInfo`.
 */
class PartyInfoSearch extends PartyInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['party_id', 'praty_bar', 'sign_count', 'apply_count', 'state'], 'integer'],
            [['party_title', 'party_pic', 'content', 'join_mode', 'pay_mode', 'start_time', 'party_state', 'sign_startline', 'sign_deadline', 'create_time', 'creator', 'update_time', 'updator'], 'safe'],
            [['price'], 'number'],
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
        $query = PartyInfo::find();

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
            'party_id' => $this->party_id,
            'price' => $this->price,
            'praty_bar' => $this->praty_bar,
            'start_time' => $this->start_time,
            'sign_startline' => $this->sign_startline,
            'sign_deadline' => $this->sign_deadline,
            'sign_count' => $this->sign_count,
            'apply_count' => $this->apply_count,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'party_title', $this->party_title])
            ->andFilterWhere(['like', 'party_pic', $this->party_pic])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'join_mode', $this->join_mode])
            ->andFilterWhere(['like', 'pay_mode', $this->pay_mode])
            ->andFilterWhere(['like', 'party_state', $this->party_state])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'updator', $this->updator]);

        return $dataProvider;
    }
}
