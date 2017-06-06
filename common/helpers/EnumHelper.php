<?php
/**
 * Created by PhpStorm.
 * Author: ljt
 * DateTime: 2016/10/28 18:22
 * Description:
 */

namespace common\helpers;


use \rbac\models\Admin;
use Yii;

class EnumHelper
{

    public static function idCardType()
    {
        return [1 => '身份证', '军官证', '台胞证'];
    }


    public static function  workYear()
    {
        return [1 => '1年以下', '1-2年', '3-5年', '5-8年', '8年以上'];
    }


    public static function sex()
    {
        return ['男', '女'];
    }

    public static function educational()
    {
        return [1 => '小学', '初中', '高中', '大专', '本科', '硕士', '博士', '博士后', '其他'];
    }

    public static function position()
    {
        return [1 => '总经理', '法人', '股东', '职员', '主管', '经理', '总监', '顾问', '其它'];
    }

    public static function companyMemeberType()
    {
        return [1 => '法定代表人', '实际控制人', '财务负责人', '经营负责人'];
    }

    public static function marry()
    {
        return ['未婚', '已婚', '离异'];
    }

    public static function income()
    {
        return [1 => '3万以下', '3-5万', '5-10万', '10-20万', '20-50万', '50-100万', '100万以上'];
    }

    public static function  roleManager($role = '区域经理')
    {
        return Admin::find()->where(['id' => Yii::$app->authManager->getUserIdsByRole($role)])->select('username')->indexBy('id')->column();
    }

    public static function  manager()
    {
        return User::find()->select('username')->indexBy('id')->column();
    }


    //--------------企业ENUM--------------


    public static function companyType()
    {
        return [1 => '经纪公司', '个体经营', '4S店', '综合经销商', '信息员专用', '平台', '其他'];
    }

    public static function  businessPlaceType()
    {
        return [1 => '展厅租赁', '展厅自有', '市场内经营'];
    }

    public static function companyWwnedIndustry()
    {
        return [1 => '二手车销售', '新车销售', '汽车运输', '汽车零配件'];
    }


    public static function investmentType()
    {
        return [

            1 => '货币', '实物', '土地使用权', '劳务和信用出资',
        ];
    }

    public static function  employeesNum()
    {
        return [
            1 => '无雇员', '5名以下', '5-10名', '10-20名', '20-30名', '30-50名', '50-80名', '80-150名', '150名以上',
        ];
    }


    public static function loanTypeBy()
    {
        return [

            1 => '个人', '企业',
        ];

    }

    //家庭成员的

    public static function memberType()
    {
        return [1 => '上学', '上班', '退休', '失业'];
    }


    public static function memeberRelationType()
    {
        return [1 => '夫妻', '母子', '父子', '儿子', '女儿'];
    }

    //家庭房产

    public static function   houseType()
    {

        return [1 => '商品房', '自建'];
    }

    public static function   decorateType()
    {

        return [1 => '简装', '精装', '豪装'];
    }

    //-person-income-------------------------------------

    public static function incomeType()
    {

        return [
            1 => '租金收入', '工资收入', '其它收入'
        ];
    }

    public static function payType()
    {
        return [
            '1' => '房贷', '车贷', '消费贷', '其它生活支出',
        ];
    }

    public static function  loanType()
    {
        return [
            '1' => '房贷', '车贷', '消费贷', '企业经营贷',
        ];
    }

    public static function  years()
    {
        $years = range(date("Y") - 10, date("Y"));
        return array_combine($years, $years);
    }

    public static function  months()
    {
        $months = range(1, 12);
        return array_combine($months, $months);
    }

    //资金通道的分类

    public static function  moneyChannelType()
    {
        return [1 => 'p2p平台', '银行', '融资租赁公司'];
    }
}