<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_bar_pay".
 *
 * @property string $order_id
 * @property int $reserve_id
 * @property int $user_id
 * @property int $bar_id
 * @property string $pay_mode
 * @property double $original_price
 * @property double $discount
 * @property double $real_price
 * @property string $pay_state
 * @property string $tbl_user_login_infocol 预留1
 * @property string $tbl_user_login_infocol1 预留2
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class BarPay extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_bar_pay';
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
            [['order_id'], 'required'],
            [['reserve_id', 'user_id', 'bar_id', 'state'], 'integer'],
            [['original_price', 'discount', 'real_price'], 'number'],
            [['create_time', 'update_time'], 'safe'],
            [['order_id', 'tbl_user_login_infocol', 'tbl_user_login_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
            [['pay_mode', 'pay_state'], 'string', 'max' => 8],
            [['order_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'reserve_id' => 'Reserve ID',
            'user_id' => 'User ID',
            'bar_id' => 'Bar ID',
            'pay_mode' => 'Pay Mode',
            'original_price' => 'Original Price',
            'discount' => 'Discount',
            'real_price' => 'Real Price',
            'pay_state' => 'Pay State',
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
