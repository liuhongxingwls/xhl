<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_user_info".
 *
 * @property int $user_id 主键自增ID
 * @property string $user_nick '用户名/昵称'
 * @property string $phone_number '注册手机号，唯一'
 * @property string $wechat_openid
 * @property string $wechat_sessionkey
 * @property string $wechat_unionid
 * @property int $real_name_verified '是否实名认证'
 * @property string $real_name '真实姓名'
 * @property string $idcard_number '身份证号'
 * @property string $sex '性别'
 * @property string $birthday 生日
 * @property string $address '来自哪里'
 * @property string $head_pic '头像存放位置'
 * @property string $last_city 上次所在城市
 * @property string $password 密码
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class UserInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_user_info';
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
            [['real_name_verified', 'state'], 'integer'],
            [['birthday', 'create_time', 'update_time'], 'safe'],
            [['user_nick', 'real_name', 'password', 'creator', 'updator'], 'string', 'max' => 45],
            [['phone_number', 'idcard_number'], 'string', 'max' => 20],
            [['wechat_openid', 'wechat_sessionkey', 'wechat_unionid'], 'string', 'max' => 32],
            [['sex'], 'string', 'max' => 2],
            [['address', 'last_city'], 'string', 'max' => 12],
            [['head_pic'], 'string', 'max' => 200],
            [['idcard_number'], 'unique'],
            [['phone_number'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => '主键自增ID',
            'user_nick' => '\'用户名/昵称\'',
            'phone_number' => '\'注册手机号，唯一\'',
            'wechat_openid' => 'Wechat Openid',
            'wechat_sessionkey' => 'Wechat Sessionkey',
            'wechat_unionid' => 'Wechat Unionid',
            'real_name_verified' => '\'是否实名认证\'',
            'real_name' => '\'真实姓名\'',
            'idcard_number' => '\'身份证号\'',
            'sex' => '\'性别\'',
            'birthday' => '生日',
            'address' => '\'来自哪里\'',
            'head_pic' => '\'头像存放位置\'',
            'last_city' => '上次所在城市',
            'password' => '密码',
            'create_time' => '创建时间',
            'creator' => '\'创建者\'',
            'update_time' => '修改时间',
            'updator' => '\'修改人\'',
            'state' => 'State',
        ];
    }
}
