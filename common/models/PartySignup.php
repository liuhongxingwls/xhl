<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_party_signup".
 *
 * @property int $row_id
 * @property int $party_id
 * @property int $user_id
 * @property int $member_count
 * @property string $real_name
 * @property string $phone_number
 * @property string $sign_time
 * @property double $should_pay
 * @property string $pay_state
 * @property string $pay_mode
 * @property string $tbl_team_infocol 预留1
 * @property string $tbl_user_infocol1 '预留2'
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class PartySignup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_party_signup';
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
            [['party_id', 'user_id', 'member_count', 'state'], 'integer'],
            [['sign_time', 'create_time', 'update_time'], 'safe'],
            [['should_pay'], 'number'],
            [['real_name', 'phone_number', 'tbl_team_infocol', 'tbl_user_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
            [['pay_state', 'pay_mode'], 'string', 'max' => 8],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'row_id' => 'Row ID',
            'party_id' => 'Party ID',
            'user_id' => 'User ID',
            'member_count' => 'Member Count',
            'real_name' => 'Real Name',
            'phone_number' => 'Phone Number',
            'sign_time' => 'Sign Time',
            'should_pay' => 'Should Pay',
            'pay_state' => 'Pay State',
            'pay_mode' => 'Pay Mode',
            'tbl_team_infocol' => '预留1',
            'tbl_user_infocol1' => '\'预留2\'',
            'create_time' => '创建时间',
            'creator' => '\'创建者\'',
            'update_time' => '修改时间',
            'updator' => '\'修改人\'',
            'state' => 'State',
        ];
    }
}
