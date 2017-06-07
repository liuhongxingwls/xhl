<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_bar_hours".
 *
 * @property int $row_id
 * @property int $bar_id
 * @property string $open_time
 * @property string $close_time
 * @property string $excute_day
 * @property string $tbl_user_login_infocol 预留1
 * @property string $tbl_user_login_infocol1 预留2
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class BarHours extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_bar_hours';
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
            [['bar_id', 'state'], 'integer'],
            [['open_time', 'close_time', 'excute_day', 'create_time', 'update_time'], 'safe'],
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
            'bar_id' => 'Bar ID',
            'open_time' => 'Open Time',
            'close_time' => 'Close Time',
            'excute_day' => 'Excute Day',
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
