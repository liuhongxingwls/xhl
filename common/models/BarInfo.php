<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_bar_info".
 *
 * @property int $bar_id
 * @property string $bar_name
 * @property string $bar_city
 * @property string $bar_address
 * @property string $bar_phonenumber
 * @property string $bar_location
 * @property string $bar_detail
 * @property string $tbl_user_login_infocol 预留1
 * @property string $tbl_user_login_infocol1 预留2
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class BarInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_bar_info';
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
            [['bar_detail'], 'string'],
            [['create_time', 'update_time'], 'safe'],
            [['state'], 'integer'],
            [['bar_name', 'bar_phonenumber', 'bar_location', 'tbl_user_login_infocol', 'tbl_user_login_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
            [['bar_city'], 'string', 'max' => 12],
            [['bar_address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bar_id' => 'Bar ID',
            'bar_name' => 'Bar Name',
            'bar_city' => 'Bar City',
            'bar_address' => 'Bar Address',
            'bar_phonenumber' => 'Bar Phonenumber',
            'bar_location' => 'Bar Location',
            'bar_detail' => 'Bar Detail',
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
