<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UserInfo;

/**
 * UserInfoSearch represents the model behind the search form of `common\models\UserInfo`.
 */
class UserInfoSearch extends UserInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'real_name_verified', 'state'], 'integer'],
            [['user_nick', 'phone_number', 'wechat_openid', 'wechat_sessionkey', 'wechat_unionid', 'real_name', 'idcard_number', 'sex', 'birthday', 'address', 'head_pic', 'last_city', 'password', 'create_time', 'creator', 'update_time', 'updator'], 'safe'],
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
        $query = UserInfo::find();

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
            'real_name_verified' => $this->real_name_verified,
            'birthday' => $this->birthday,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'user_nick', $this->user_nick])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'wechat_openid', $this->wechat_openid])
            ->andFilterWhere(['like', 'wechat_sessionkey', $this->wechat_sessionkey])
            ->andFilterWhere(['like', 'wechat_unionid', $this->wechat_unionid])
            ->andFilterWhere(['like', 'real_name', $this->real_name])
            ->andFilterWhere(['like', 'idcard_number', $this->idcard_number])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'head_pic', $this->head_pic])
            ->andFilterWhere(['like', 'last_city', $this->last_city])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'updator', $this->updator]);

        return $dataProvider;
    }
}
