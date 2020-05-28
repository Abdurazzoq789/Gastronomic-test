<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/animate.css',
        'css/bootstrap.min.css',
        'css/festival.css',
        'css/food.css',
        'css/kontakt.css',
        'css/novosti.css',
        'css/novostiPodrobiye.css',
        'css/Onas.css',
        'css/owl.carusel.default.css',
        'css/resposive.css',
        'css/rest1.css',
        'css/salat.css',
        'css/site.css',
        'css/styles.css',
        'css/styles2.css',
        'css/top10.css',
        'css/topRest.css',
        'css/owl.carusel.min.css',
    ];
    public $js = [
        'js/'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
