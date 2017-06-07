<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_team_chat".
 *
 * @property int $team_id 队伍ID，属于哪个队伍的聊天
 * @property string $content_type 内容的形式（文字，图片，音频，小视频等），存在字典表
 * @property string $content 聊天的具体内容，根据type存放不同的信息
 * @property string $tbl_team_infocol 预留1
 * @property string $tbl_user_infocol1 '预留2'
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class TeamChat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_team_chat';
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
            [['create_time', 'update_time'], 'safe'],
            [['state'], 'integer'],
            [['content_type'], 'string', 'max' => 8],
            [['content'], 'string', 'max' => 255],
            [['tbl_team_infocol', 'tbl_user_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'team_id' => '队伍ID，属于哪个队伍的聊天',
            'content_type' => '内容的形式（文字，图片，音频，小视频等），存在字典表',
            'content' => '聊天的具体内容，根据type存放不同的信息',
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
