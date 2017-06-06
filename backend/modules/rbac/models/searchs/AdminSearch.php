<?php

namespace rbac\models\searchs;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use rbac\models\Admin;

/**
 * BasicCarBrandSearch represents the model behind the search form about `backend\modules\basicmodel\models\BasicCarBrand`.
 */
class AdminSearch extends Admin
{
    public $created_at;
    public $updated_at;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lastlogintime'], 'safe'],
            [['account_enabled', 'account_expired', 'account_locked', 'credentials_expired'], 'boolean'],
            [['userid','status'], 'integer'],
            [['lastloginip','realname','username'], 'string'],
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
        $query = Admin::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'userid' => SORT_DESC
                ]
            ]
        ]);

        $this->load($params);

        
        if (!$this->validate()) {
            return $dataProvider;
        }
        
        $query->andFilterWhere([
            'userid' => $this->userid,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'realname', $this->realname]);

        return $dataProvider;
    }
}
