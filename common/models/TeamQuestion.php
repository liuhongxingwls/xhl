<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_team_question".
 *
 * @property int $question_id
 * @property string $question_type
 * @property string $question_message
 * @property string $question_detail
 * @property string $question_generation 年龄段,先预留着
 * @property string $left_answer 左划的答案
 * @property string $right_answer 右划的答案
 * @property string $tbl_question_infocol
 * @property string $tbl_question_infocol1
 * @property string $create_time
 * @property string $creator
 * @property string $update_time
 * @property string $updator
 * @property int $state
 */
class TeamQuestion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_team_question';
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
            [['question_detail'], 'string'],
            [['create_time', 'update_time'], 'safe'],
            [['state'], 'integer'],
            [['question_type'], 'string', 'max' => 8],
            [['question_message'], 'string', 'max' => 255],
            [['question_generation', 'left_answer', 'right_answer', 'tbl_question_infocol', 'tbl_question_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'question_id' => 'Question ID',
            'question_type' => 'Question Type',
            'question_message' => 'Question Message',
            'question_detail' => 'Question Detail',
            'question_generation' => '年龄段,先预留着',
            'left_answer' => '左划的答案',
            'right_answer' => '右划的答案',
            'tbl_question_infocol' => 'Tbl Question Infocol',
            'tbl_question_infocol1' => 'Tbl Question Infocol1',
            'create_time' => 'Create Time',
            'creator' => 'Creator',
            'update_time' => 'Update Time',
            'updator' => 'Updator',
            'state' => 'State',
        ];
    }
}
