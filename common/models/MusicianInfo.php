<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_musician_info".
 *
 * @property int $musician_id
 * @property string $musician_type
 * @property string $name
 * @property string $musician_pic
 * @property string $content
 * @property string $tbl_musician_infocol
 * @property string $tbl_user_infocol1 '预留2'
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class MusicianInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_musician_info';
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
            [['create_time', 'update_time'], 'safe'],
            [['state'], 'integer'],
            [['musician_type'], 'string', 'max' => 8],
            [['name', 'tbl_musician_infocol', 'tbl_user_infocol1', 'creator', 'updator'], 'string', 'max' => 45],
            [['musician_pic'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'musician_id' => 'Musician ID',
            'musician_type' => 'Musician Type',
            'name' => 'Name',
            'musician_pic' => 'Musician Pic',
            'content' => 'Content',
            'tbl_musician_infocol' => 'Tbl Musician Infocol',
            'tbl_user_infocol1' => '\'预留2\'',
            'create_time' => '创建时间',
            'creator' => '\'创建者\'',
            'update_time' => '修改时间',
            'updator' => '\'修改人\'',
            'state' => 'State',
        ];
    }
}
