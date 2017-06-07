<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_mus_odds".
 *
 * @property int $row_id
 * @property string $music_type
 * @property int $musician_id
 * @property string $music_name
 * @property string $content
 * @property string $path
 * @property string $tbl_user_login_infocol 预留1
 * @property string $tbl_user_login_infocol1 预留2
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class MusOdds extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_mus_odds';
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
            [['musician_id', 'state'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['music_type'], 'string', 'max' => 8],
            [['music_name', 'tbl_user_login_infocol', 'tbl_user_login_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
            [['content', 'path'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'row_id' => 'Row ID',
            'music_type' => 'Music Type',
            'musician_id' => 'Musician ID',
            'music_name' => 'Music Name',
            'content' => 'Content',
            'path' => 'Path',
            'tbl_user_login_infocol' => '预留1',
            'tbl_user_login_infocol1' => '预留2',
            'create_time' => '创建时间',
            'creator' => '\'创建者\'',
            'update_time' => '修改时间',
            'updator' => '\'修改人\'',
            'state' => 'State',
        ];
    }
}
