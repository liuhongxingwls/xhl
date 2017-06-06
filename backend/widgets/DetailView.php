<?php
/**
 * Created by PhpStorm.
 * User: iautos
 * Date: 2016/11/27
 * Time: 下午5:11
 */

namespace backend\widgets;

use yii\helpers\ArrayHelper;
use Yii;
use yii\i18n\Formatter;
use yii\base\InvalidConfigException;

class DetailView extends \yii\widgets\DetailView
{
    public $layout = 'default';

    public function init()
    {
        if ($this->layout == 'horizontal') {
            $this->template = '<div class="col-sm-6 form-group"><label class="col-sm-3 control-label">{label}</label><div class="col-sm-9">{value}</div></div>';
            $this->options = ['tag' => 'div', 'class' => 'row detail-view'];
        }
        parent::init();
    }

}