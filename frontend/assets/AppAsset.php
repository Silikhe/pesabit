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
        "css/site.css",
        // 'themes/css/all.min.css',
        // 'themes/css/animated.css',
        // 'themes/css/bootstrap.min.css',
        // 'themes/css/flaticon.css',
        // 'themes/css/flaticon.css',
        // 'themes/css/jquery-ui.min.css',
        // 'themes/css/magnific-popup.css',
        // 'themes/css/main.css',
        // 'themes/css/nice-select.css',
        // 'themes/css/owl.min.css',
        "themes/css/bootstrap.min.css",
        "themes/css/all.min.css",
        "themes/css/animate.css",
        "themes/css/nice-select.css",
        "themes/css/owl.min.css",
        "themes/css/magnific-popup.css",
        "themes/css/flaticon.css",
        "themes/css/jquery-ui.min.css",
        "themes/css/main.css",
    ];
    public $js = [

        "themes/js/jquery-3.3.1.min.js",
        "themes/js/modernizr-3.6.0.min.js",
        "themes/js/plugins.js",
        "themes/js/bootstrap.min.js",
        "themes/js/isotope.pkgd.min.js",
        "themes/js/wow.min.js",
        "themes/js/waypoints.js",
        "themes/js/nice-select.js",
        "themes/js/counterup.min.js",
        "themes/js/owl.min.js",
        "themes/js/magnific-popup.min.js",
        "themes/js/yscountdown.min.js",
        "themes/js/jquery-ui.min.js",
        "themes/js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
