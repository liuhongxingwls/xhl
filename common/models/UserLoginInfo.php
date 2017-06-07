<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_user_login_info".
 *
 * @property int $row_id 对应user表的userid
 * @property string $access_token 长时token
 * @property string $access_deadline 长时token有效期
 * @property string $refresh_token 短时token
 * @property string $refresh_deadline 短时token有效期
 * @property string $tbl_user_login_infocol 预留1
 * @property string $tbl_user_login_infocol1 预留2
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class UserLoginInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_user_login_info';
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
            [['row_id'], 'required'],
            [['row_id', 'state'], 'integer'],
            [['access_deadline', 'refresh_deadline', 'create_time', 'update_time'], 'safe'],
            [['access_token', 'refresh_token'], 'string', 'max' => 255],
            [['tbl_user_login_infocol', 'tbl_user_login_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
            [['row_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'row_id' => '对应user表的userid',
            'access_token' => '长时token',
            'access_deadline' => '长时token有效期',
            'refresh_token' => '短时token',
            'refresh_deadline' => '短时token有效期',
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
