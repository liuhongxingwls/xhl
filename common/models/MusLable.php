<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_mus_lable".
 *
 * @property int $row_id
 * @property int $musician_id
 * @property int $label_id
 * @property string $label_tpye 标签的分类，在系统表里
 * @property string $label_name 标签的名字
 * @property string $tbl_user_login_infocol 预留1
 * @property string $tbl_user_login_infocol1 预留2
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class MusLable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_mus_lable';
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
            [['musician_id', 'label_id', 'state'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['label_tpye'], 'string', 'max' => 8],
            [['label_name', 'tbl_user_login_infocol', 'tbl_user_login_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
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
            'label_id' => 'Label ID',
            'label_tpye' => '标签的分类，在系统表里',
            'label_name' => '标签的名字',
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
