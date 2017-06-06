<?php
/**
 * Created by PhpStorm.
 * Author: ljt
 * DateTime: 2016/10/25 16:26
 * Description:
 */

namespace backend\widgets;


use Yii;
use yii\base\Widget;
use yii\bootstrap\Alert;
use yii\db\ActiveRecord;
use yii\helpers\Html;
use common\widgets\upload\MultipleWidget;
use common\models\AttachmentCategory;
use yii\bootstrap\Tabs;

class AttachmentFormWidget extends Widget
{
    public $model;
    public $categories;

    public function run()
    {
        $items = [];
        /**
         * @var $model ActiveRecord
         */
        $model = $this->model;
        foreach ($this->categories as $k => $category){
            $num = $model->getAttachmentNum($category->name);
            $item = [];
            $item['label'] = $category->title . ($num > 0 ? ' ' . Html::tag('span', $num, ['class' => 'badge']) : '');
            $item['content'] = '';
            if (!empty($category->description)) {
                $item['content'] .= Alert::widget([
                    'options' => ['class' => 'alert-info'],
                    'body' => $category->description
                ]);
            }
            $item['content'] .= '<br>' . MultipleWidget::widget([
                'model' => $this->model,
                'attribute' => $category->name,
            ]);
            $items[] = $item;
        }
        echo Html::beginTag('div', ['class' => 'nav-tabs-custom']);
        echo Tabs::widget([
            'items' => $items,
            'encodeLabels' => false,
        ]);
        echo Html::endTag('div');
    }
}

/*合易融业务授信资料清单
业务类别	序号	提供方	材料名称	提报要求
授信额度申请资料	1	商户	企业征信报告(如有)	原件
	2	商户	反映商户近半年主要经营情况的银行流水	原件盖银行公章
	3	商户	经营主体营业执照（副本）、组织机构代码（副本）、税务登记证（副本）、公司章程/合伙协议（如有）	复印件盖公章
	4	商户	法定代表人、指定借款人及其配偶身份证（正反面复印在一张A4纸上并本人签字）；法定代表人、指定借款人及其配偶身份证户口本（含首页、户主页、本人页及变更页）； 	复印件盖公章
	5	商户	有效期在3个月以上的企业经营场所权属证明或租赁合同；有效期内的监管车辆存放地的财产保险单	复印件盖公章
	6	商户	商户近半年进销存证明材料（库存车辆明细、财务报表、进销存台账、合同等）	复印件盖公章
	7	商户	法定代表人、指定借款人及其配偶近半个月查询的个人征信报告(如有) 	复印件
	8	商户	法定代表人、指定借款人婚姻情况证明材料（结婚证或单身证明）	复印件盖公章
	9	商户	若借款人为企业实际控制人，需企业出具证明书。	原件盖公章
	10	商户	法定代表人资产证明材料（房产、自有车辆、股权等）	复印件
	11	商户	《库存融资业务申请表》	原件

业务类别	序号	提供方	材料名称	提报要求
用款申请资料	1	借款人	合易融业务用款申请书	原件（需面签）
	2	借款人	车辆钥匙、车辆权属证明（行驶证、登记证）、购买车辆的证明（发票、合同等）	原件，购车证明可复印件（须借款人在复印件逐页签字，如借款人是企业则加盖企业公章）
	3	客户现场签署	《售后回租合同》4份（签字页与客户本人拍照）、《售后回租车辆监管协议》4份（首次用款签署）、租赁车辆购买价款确认函（每辆车一份）、租赁物交接确认单、收款确认函（放款后出具）	原件（需面签）
	4	担保人	《履约保证函》，担保人及其配偶身份证复印件，提供公司担保的需付股东会决议（非借款人的法人、股东签署多份，签署份数根据拟申请借款次数而定）	原件（需面签）
	5	商户	《车辆权属确认函》，车辆所有人的身份证复印件（非借款人的代持人签署多份，每人签署份数根据拟申请借款次数而定）	确认函原件（需面签）
	6	区域销售人员	《销售人员签约核实书》	原件


业务类别	序号	提供方	材料名称	提报要求
车辆置换阶段	1	借款人	库存融资业务车辆置换申请书	原件
	2	借款人	租赁物交接确认单	原件（需面签）
	3	借款人	车辆解除监管确认函	原件（需面签）
	4	车辆所有人	车辆权属确认函	原件（需面签）*/

