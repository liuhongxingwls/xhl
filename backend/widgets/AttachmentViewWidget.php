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

class AttachmentViewWidget extends Widget
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
            if (is_string($category)) {
                $category = AttachmentCategory::find()->where(['name' => $category, 'relation_table' => $this->model->relationTable])->one();
            }
            echo Html::beginTag('div', ['class' => 'box box-solid']);
            echo Html::beginTag('div', ['class' => 'box-header']);
            echo Html::tag('h5', $category->title . ' <span class="badge">' . count($model->getAttachment($category->name)) . '</span>', ['class' => 'box-title']);
            echo Html::tag('div', '<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"><i class="fa fa-minus"></i></button>', ['class' => 'box-tools pull-right']);
            echo Html::endTag('div');
            echo Html::beginTag('div', ['class' => 'box-body']);
            foreach ($model->getAttachment($category->name) as $attachment) {
                echo Html::a(Html::img($attachment->url, ['width' => 150, 'height' => 150]),  $attachment->url, ['class' => 'fancybox', 'rel' => 'fancybox-button fancybox-thumb', 'title' => $attachment->name, 'data-fancybox-group' => $category->name]);
                echo ' ';
            }
            echo Html::endTag('div');
            echo Html::endTag('div');
        }
    }
}

/**
 * <div class="box box-solid">
<div class="box-header">
<h5 class="box-title"><?= $category->title ?> <span class="badge"><?= count($model->getAttachment($category->name)) ?></span></h5>
<div class="box-tools pull-right">
<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"><i class="fa fa-minus"></i></button>
</div>
</div>
<div class="box-body">
<?php foreach ($model->getAttachment($category->name) as $attachment): ?>
<a class="fancybox" href="<?= $attachment->url ?>" rel="fancybox-button fancybox-thumb" title="<?= $attachment->name ?>" data-fancybox-group="<?= $category->name ?>">
<?= Html::img($attachment->url, ['width' => 150, 'height' => 150]) ?>
</a>
<?php endforeach; ?>
</div>
</div>
 */