<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_user_collect".
 *
 * @property int $user_id
 * @property string $collect_type
 * @property int $collect_id
 * @property string $tbl_user_collectcol
 * @property string $tbl_user_infocol1 '预留2'
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class UserCollect extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_user_collect';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db_xhl');
    }

    public static function primaryKey()
    {
        return ['user_id'];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id', 'collect_id', 'state'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['collect_type'], 'string', 'max' => 8],
            [['tbl_user_collectcol', 'tbl_user_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'collect_type' => 'Collect Type',
            'collect_id' => 'Collect ID',
            'tbl_user_collectcol' => 'Tbl User Collectcol',
            'tbl_user_infocol1' => '\'预留2\'',
            'create_time' => '创建时间',
            'creator' => '\'创建者\'',
            'update_time' => '修改时间',
            'updator' => '\'修改人\'',
            'state' => 'State',
        ];
    }
}
