<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_show_info".
 *
 * @property int $row_id
 * @property int $musician_id
 * @property int $bar_id
 * @property string $show_date
 * @property string $start_time
 * @property string $end_time
 * @property string $tbl_user_login_infocol 预留1
 * @property string $tbl_user_login_infocol1 预留2
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class ShowInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_show_info';
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
            [['musician_id', 'bar_id', 'state'], 'integer'],
            [['show_date', 'start_time', 'end_time', 'create_time', 'update_time'], 'safe'],
            [['tbl_user_login_infocol', 'tbl_user_login_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'row_id' => 'Row ID',
            'musician_id' => 'Musician ID',
            'bar_id' => 'Bar ID',
            'show_date' => 'Show Date',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
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
