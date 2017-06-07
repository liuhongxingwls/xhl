<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_bar_product".
 *
 * @property int $product_id
 * @property int $menu_id
 * @property string $product_name
 * @property string $product_pic
 * @property string $sales_unit
 * @property double $price
 * @property int $show_order
 * @property string $product_detail
 * @property string $tbl_user_login_infocol 预留1
 * @property string $tbl_user_login_infocol1 预留2
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class BarProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_bar_product';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db_xhl');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_id', 'show_order', 'state'], 'integer'],
            [['price'], 'number'],
            [['product_detail'], 'string'],
            [['create_time', 'update_time'], 'safe'],
            [['product_name', 'sales_unit', 'tbl_user_login_infocol', 'tbl_user_login_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
            [['product_pic'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'menu_id' => 'Menu ID',
            'product_name' => 'Product Name',
            'product_pic' => 'Product Pic',
            'sales_unit' => 'Sales Unit',
            'price' => 'Price',
            'show_order' => 'Show Order',
            'product_detail' => 'Product Detail',
            'tbl_user_login_infocol' => 'Tbl User Login Infocol',
            'tbl_user_login_infocol1' => 'Tbl User Login Infocol1',
            'create_time' => 'Create Time',
            'creator' => 'Creator',
            'update_time' => 'Update Time',
            'updator' => 'Updator',
            'state' => 'State',
        ];
    }
}
