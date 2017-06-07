<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_team_member".
 *
 * @property int $row_id 主键自增id
 * @property int $team_id 队伍id
 * @property int $user_id 用户id
 * @property int $team_leader 用户是否是队长
 * @property string $apply_state 用户请求状态（申请中    已取消已拒绝	已加入	被踢出	已退出）
 * @property string $apply_message 申请留言
 * @property string $tbl_user_infocol1 '预留2'
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class TeamMember extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_team_member';
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
            [['team_id', 'user_id', 'team_leader', 'state'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['apply_state'], 'string', 'max' => 8],
            [['apply_message'], 'string', 'max' => 255],
            [['tbl_user_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'row_id' => '主键自增id',
            'team_id' => '队伍id',
            'user_id' => '用户id',
            'team_leader' => '用户是否是队长',
            'apply_state' => '用户请求状态（申请中    已取消已拒绝	已加入	被踢出	已退出）',
            'apply_message' => '申请留言',
            'tbl_user_infocol1' => '\'预留2\'',
            'create_time' => '创建时间',
            'creator' => '\'创建者\'',
            'update_time' => '修改时间',
            'updator' => '\'修改人\'',
            'state' => 'State',
        ];
    }
}
