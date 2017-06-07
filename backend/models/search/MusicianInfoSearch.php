<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MusicianInfo;

/**
 * MusicianInfoSearch represents the model behind the search form of `common\models\MusicianInfo`.
 */
class MusicianInfoSearch extends MusicianInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['musician_id', 'state'], 'integer'],
            [['musician_type', 'name', 'musician_pic', 'content', 'tbl_musician_infocol', 'tbl_user_infocol1', 'create_time', 'creator', 'update_time', 'updator'], 'safe'],
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
        $query = MusicianInfo::find();

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
            'musician_id' => $this->musician_id,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'musician_type', $this->musician_type])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'musician_pic', $this->musician_pic])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'tbl_musician_infocol', $this->tbl_musician_infocol])
            ->andFilterWhere(['like', 'tbl_user_infocol1', $this->tbl_user_infocol1])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'updator', $this->updator]);

        return $dataProvider;
    }
}
