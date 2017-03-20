<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/base.css',
        'css/site.css',
        '//fonts.googleapis.com/css?family=Raleway:400,300,600'
    ];
    public $js = [
    	'scripts/utils.js',
    		'https://maps.googleapis.com/maps/api/js?key=AIzaSyCYgNtQ-5NcwweART2VUb9OCIGlAzr9Xrc&callback=initMap'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    
    public $jsOptions = [
    		'position' => \yii\web\View::POS_HEAD,
    		'async' => 'async',
    		'defer' => 'defer'
    ];
}
