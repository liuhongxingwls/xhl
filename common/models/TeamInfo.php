<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_team_info".
 *
 * @property int $team_id 主键自增id
 * @property string $team_name 队伍名
 * @property string $start_time 开始时间
 * @property string $bar_type 酒吧类型，全存这，用时解析
 * @property int $member_count 预计人数
 * @property string $member_limit 成员限制（男女比例），用sys_code表示
 * @property string $pay_mode 结账方式，用sys_code表示
 * @property int $will_cost 预计消费
 * @property string $team_message 队伍信息（备注）
 * @property string $team_state 队伍状态(草稿，组队中，已解散，已完成），用sys_code表示
 * @property int $will_bar 预定的酒吧
 * @property int $member_exist 队伍人数（已有多少人）
 * @property string $conversation_id 预留1
 * @property string $tbl_user_infocol1 '预留2'
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class TeamInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_team_info';
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
            [['start_time', 'create_time', 'update_time'], 'safe'],
            [['member_count', 'will_cost', 'will_bar', 'member_exist', 'state'], 'integer'],
            [['team_name', 'tbl_user_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
            [['bar_type', 'team_message'], 'string', 'max' => 255],
            [['member_limit', 'pay_mode', 'team_state'], 'string', 'max' => 8],
            [['conversation_id'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'team_id' => '主键自增id',
            'team_name' => '队伍名',
            'start_time' => '开始时间',
            'bar_type' => '酒吧类型，全存这，用时解析',
            'member_count' => '预计人数',
            'member_limit' => '成员限制（男女比例），用sys_code表示',
            'pay_mode' => '结账方式，用sys_code表示',
            'will_cost' => '预计消费',
            'team_message' => '队伍信息（备注）',
            'team_state' => '队伍状态(草稿，组队中，已解散，已完成），用sys_code表示',
            'will_bar' => '预定的酒吧',
            'member_exist' => '队伍人数（已有多少人）',
            'conversation_id' => '预留1',
            'tbl_user_infocol1' => '\'预留2\'',
            'create_time' => '创建时间',
            'creator' => '\'创建者\'',
            'update_time' => '修改时间',
            'updator' => '\'修改人\'',
            'state' => 'State',
        ];
    }
}
