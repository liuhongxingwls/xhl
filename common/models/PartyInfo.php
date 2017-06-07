<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_party_info".
 *
 * @property int $party_id
 * @property string $party_title 活动标题
 * @property string $party_pic 活动图片
 * @property string $content 活动内容页
 * @property string $join_mode 加入方式
 * @property string $pay_mode 付款方式
 * @property double $price 价格
 * @property int $praty_bar 活动的地点
 * @property string $start_time 活动开始时间
 * @property string $party_state 活动状态
 * @property string $sign_startline 报名开始时间
 * @property string $sign_deadline 报名结束时间
 * @property int $sign_count 预留1
 * @property int $apply_count '预留2'
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class PartyInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_party_info';
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
            [['content'], 'string'],
            [['price'], 'number'],
            [['praty_bar', 'sign_count', 'apply_count', 'state'], 'integer'],
            [['start_time', 'sign_startline', 'sign_deadline', 'create_time', 'update_time'], 'safe'],
            [['party_title', 'creator', 'updator'], 'string', 'max' => 45],
            [['party_pic'], 'string', 'max' => 255],
            [['join_mode', 'pay_mode', 'party_state'], 'string', 'max' => 8],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'party_id' => 'Party ID',
            'party_title' => '活动标题',
            'party_pic' => '活动图片',
            'content' => '活动内容页',
            'join_mode' => '加入方式',
            'pay_mode' => '付款方式',
            'price' => '价格',
            'praty_bar' => '活动的地点',
            'start_time' => '活动开始时间',
            'party_state' => '活动状态',
            'sign_startline' => '报名开始时间',
            'sign_deadline' => '报名结束时间',
            'sign_count' => '预留1',
            'apply_count' => '\'预留2\'',
            'create_time' => '创建时间',
            'creator' => '\'创建者\'',
            'update_time' => '修改时间',
            'updator' => '\'修改人\'',
            'state' => 'State',
        ];
    }
}
