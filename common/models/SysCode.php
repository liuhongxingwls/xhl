<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_sys_code".
 *
 * @property int $row_id
 * @property string $code
 * @property string $name
 * @property string $tbl_sys_codecol
 * @property string $tbl_sys_codecol1
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class SysCode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_sys_code';
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
            [['create_time', 'update_time'], 'safe'],
            [['state'], 'integer'],
            [['code'], 'string', 'max' => 8],
            [['name', 'tbl_sys_codecol', 'tbl_sys_codecol1', 'creator', 'updator'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'row_id' => 'Row ID',
            'code' => 'Code',
            'name' => 'Name',
            'tbl_sys_codecol' => 'Tbl Sys Codecol',
            'tbl_sys_codecol1' => 'Tbl Sys Codecol1',
            'create_time' => '创建时间',
            'creator' => '\'创建者\'',
            'update_time' => '修改时间',
            'updator' => '\'修改人\'',
            'state' => 'State',
        ];
    }
}
