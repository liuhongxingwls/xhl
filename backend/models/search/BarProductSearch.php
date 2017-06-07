<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BarProduct;

/**
 * BarProductSearch represents the model behind the search form of `common\models\BarProduct`.
 */
class BarProductSearch extends BarProduct
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'menu_id', 'show_order', 'state'], 'integer'],
            [['product_name', 'product_pic', 'sales_unit', 'product_detail', 'tbl_user_login_infocol', 'tbl_user_login_infocol1', 'create_time', 'creator', 'update_time', 'updator'], 'safe'],
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
        $query = BarProduct::find();

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
            'product_id' => $this->product_id,
            'menu_id' => $this->menu_id,
            'price' => $this->price,
            'show_order' => $this->show_order,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'state' => $this->state,
        ]);

        $query->andFilterWhere(['like', 'product_name', $this->product_name])
            ->andFilterWhere(['like', 'product_pic', $this->product_pic])
            ->andFilterWhere(['like', 'sales_unit', $this->sales_unit])
            ->andFilterWhere(['like', 'product_detail', $this->product_detail])
            ->andFilterWhere(['like', 'tbl_user_login_infocol', $this->tbl_user_login_infocol])
            ->andFilterWhere(['like', 'tbl_user_login_infocol1', $this->tbl_user_login_infocol1])
            ->andFilterWhere(['like', 'creator', $this->creator])
            ->andFilterWhere(['like', 'updator', $this->updator]);

        return $dataProvider;
    }
}
