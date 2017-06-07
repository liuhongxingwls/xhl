<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tbl_city_info".
 *
 * @property int $row_id
 * @property string $ad_code
 * @property string $city_code
 * @property string $city_name 城市名
 * @property string $city_level
 * @property string $create_time 创建时间
 * @property string $creator '创建者'
 * @property string $update_time 修改时间
 * @property string $updator '修改人'
 * @property int $state
 */
class CityInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_city_info';
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
            [['ad_code'], 'string', 'max' => 8],
            [['city_code'], 'string', 'max' => 4],
            [['city_name', 'city_level', 'creator', 'updator'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'row_id' => 'Row ID',
            'ad_code' => 'Ad Code',
            'city_code' => 'City Code',
            'city_name' => '城市名',
            'city_level' => 'City Level',
            'create_time' => '创建时间',
            'creator' => '\'创建者\'',
            'update_time' => '修改时间',
            'updator' => '\'修改人\'',
            'state' => 'State',
        ];
    }
}
