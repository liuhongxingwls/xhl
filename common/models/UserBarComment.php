<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_user_bar_comment".
 *
 * @property int $bar_id
 * @property int $user_id
 * @property int $user_score
 * @property string $comment_message
 * @property string $tbl_user_login_infocol
 * @property string $tbl_user_login_infocol1
 * @property string $create_time
 * @property string $creator
 * @property string $update_time
 * @property string $updator
 * @property int $state
 */
class UserBarComment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_user_bar_comment';
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
            [['bar_id', 'user_id', 'user_score', 'state'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['comment_message'], 'string', 'max' => 255],
            [['tbl_user_login_infocol', 'tbl_user_login_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bar_id' => 'Bar ID',
            'user_id' => 'User ID',
            'user_score' => 'User Score',
            'comment_message' => 'Comment Message',
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
