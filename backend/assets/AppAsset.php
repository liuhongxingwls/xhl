<?php
namespace backend\assets;

use yii\base\Exception;
use yii\web\AssetBundle;
use yii\web\View;

class AppAsset extends AssetBundle
{
//    public $basePath = '@webroot';
//    public $baseUrl = '@web';
    public $sourcePath = '@backend/static';
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
    public $css = [
        ['css/theme-default.css','id'=>'theme'],
        //'css/site.css'
    ];


    public $js = [
        //'js/plugins/jquery/jquery-3.1.1.min.js',
        'js/plugins/jquery/jquery-2.2.3.js',
        'js/plugins/jquery/jquery-ui.min.js',
        //'js/plugins/bootstrap/bootstrap.min.js',
        'js/plugins/icheck/icheck.min.js',
        'js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js',
        'js/plugins/datatables/jquery.dataTables.min.js',

        'js/settings.js',
        'js/plugins.js',
        'js/actions.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',

        //    'common\assets\ModalAsset',
        //    'common\assets\FontAwesomeAsset',
        //    'common\assets\FancyboxAsset'
    ];

    public $publishOptions = ['css/theme-dark.css'];

    /**
     * @var string|bool Choose skin color, eg. `'skin-blue'` or set `false` to disable skin loading
     * @see https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html#layout
     */
    public $skin = '';

    /**
     * @inheritdoc
     */
    public function init()
    {
        // Append skin color file if specified
        if ($this->skin) {
            if (('_all-skins' !== $this->skin) && (strpos($this->skin, 'skin-') !== 0)) {
                throw new Exception('Invalid skin specified');
            }

            $this->css[] = sprintf('css/skins/%s.min.css', $this->skin);
        }

        parent::init();
    }
}



