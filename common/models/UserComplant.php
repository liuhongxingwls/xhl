<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_user_complant".
 *
 * @property int $user_id
 * @property string $complant_type
 * @property int $complant_id
 * @property string $content_type
 * @property string $content
 * @property string $tbl_user_collectcol
 * @property string $tbl_user_infocol1 '预留2'
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class UserComplant extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_user_complant';
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
            [['user_id', 'complant_id', 'state'], 'integer'],
            [['create_time', 'update_time'], 'safe'],
            [['complant_type'], 'string', 'max' => 8],
            [['content_type', 'tbl_user_collectcol', 'tbl_user_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
            [['content'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'complant_type' => 'Complant Type',
            'complant_id' => 'Complant ID',
            'content_type' => 'Content Type',
            'content' => 'Content',
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
