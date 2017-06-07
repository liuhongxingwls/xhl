<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_bar_discount".
 *
 * @property int $row_id
 * @property int $bar_id
 * @property string $dis_date
 * @property double $original_discount
 * @property double $online_disocunt
 * @property double $offline_discount
 * @property string $tbl_user_login_infocol 预留1
 * @property string $tbl_user_login_infocol1 预留2
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class BarDiscount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_bar_discount';
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
            [['dis_date', 'create_time', 'update_time'], 'safe'],
            [['original_discount', 'online_disocunt', 'offline_discount'], 'number'],
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
            'dis_date' => 'Dis Date',
            'original_discount' => 'Original Discount',
            'online_disocunt' => 'Online Disocunt',
            'offline_discount' => 'Offline Discount',
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
