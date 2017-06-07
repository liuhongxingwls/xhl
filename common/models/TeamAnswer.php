<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_team_answer".
 *
 * @property int $question_id
 * @property int $user_id
 * @property int $answer
 * @property string $tbl_user_login_infocol
 * @property string $tbl_user_login_infocol1
 * @property string $creator
 * @property string $create_time
 * @property string $updator
 * @property string $update_time
 * @property int $state
 */
class TeamAnswer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_team_answer';
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
            [['question_id', 'user_id', 'answer', 'state'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['tbl_user_login_infocol', 'tbl_user_login_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
        ];
    }

    public static function primaryKey()
    {
        return ['question_id'];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'question_id' => 'Question ID',
            'user_id' => 'User ID',
            'answer' => 'Answer',
            'tbl_user_login_infocol' => 'Tbl User Login Infocol',
            'tbl_user_login_infocol1' => 'Tbl User Login Infocol1',
            'creator' => 'Creator',
            'create_time' => 'Create Time',
            'updator' => 'Updator',
            'update_time' => 'Update Time',
            'state' => 'State',
        ];
    }
}
