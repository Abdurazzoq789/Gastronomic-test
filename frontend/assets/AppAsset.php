<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@frontend/assets/front';

    public $css = [
        'css/bootstrap.min.css',
        'fa/css/all.min.css',
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
        'css/animate.css',
        'css/styles2.css',
        'css/responsive.css',
    ];

    public $js = [
        'js/bootstrap.bundle.min.js',
        'js/owl.carousel.min.js',
        'js/Cantrol.js',
        'js/myJS.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
