<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_bar_reserve".
 *
 * @property int $reserve_id
 * @property int $user_id
 * @property int $bar_id
 * @property string $seat_type
 * @property string $reserve_time
 * @property int $member_count
 * @property string $real_name
 * @property string $phone_number
 * @property string $reserve_state
 * @property double $user_cost
 * @property string $tbl_bar_reservecol
 * @property string $tbl_user_login_infocol 预留1
 * @property string $tbl_user_login_infocol1 预留2
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class BarReserve extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_bar_reserve';
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
            [['user_id', 'bar_id', 'member_count', 'state'], 'integer'],
            [['reserve_time', 'create_time', 'update_time'], 'safe'],
            [['user_cost'], 'number'],
            [['seat_type', 'reserve_state'], 'string', 'max' => 8],
            [['real_name', 'phone_number', 'tbl_bar_reservecol', 'tbl_user_login_infocol', 'tbl_user_login_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'reserve_id' => 'Reserve ID',
            'user_id' => 'User ID',
            'bar_id' => 'Bar ID',
            'seat_type' => 'Seat Type',
            'reserve_time' => 'Reserve Time',
            'member_count' => 'Member Count',
            'real_name' => 'Real Name',
            'phone_number' => 'Phone Number',
            'reserve_state' => 'Reserve State',
            'user_cost' => 'User Cost',
            'tbl_bar_reservecol' => 'Tbl Bar Reservecol',
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
