<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_bar_seat".
 *
 * @property int $bar_id
 * @property string $seat_type
 * @property int $accept_reserve
 * @property string $seat_detail
 * @property int $is_noseat
 * @property string $seat_pic
 * @property string $tbl_user_login_infocol 预留1
 * @property string $tbl_user_login_infocol1 预留2
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class BarSeat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_bar_seat';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db_xhl');
    }

    public static function primaryKey()
    {
        return ['bar_id'];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bar_id'], 'required'],
            [['bar_id', 'accept_reserve', 'is_noseat', 'state'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['seat_type'], 'string', 'max' => 8],
            [['seat_detail', 'tbl_user_login_infocol', 'tbl_user_login_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
            [['seat_pic'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bar_id' => 'Bar ID',
            'seat_type' => 'Seat Type',
            'accept_reserve' => 'Accept Reserve',
            'seat_detail' => 'Seat Detail',
            'is_noseat' => 'Is Noseat',
            'seat_pic' => 'Seat Pic',
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
