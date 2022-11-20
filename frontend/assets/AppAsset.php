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
        '/css/bootstrap.min.css',
        '/css/jquery.fancybox.min.css',
        'https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css',
        'https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css',
        'https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/css/ion.rangeSlider.min.css',
        'css/remodal.css',
        'css/remodal-default-theme.css',
        'css/fake-order.min.css',
        'css/style.css'

    ];
    public $js = [
        //'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js',
        'https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js',
        'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js',
        'js/jquery.fancybox.min.js',
        'https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js',
        'js/jquery.spincrement.min.js',
        'js/remodal.js',
        'js/custom.js',
        'js/imask.js',
        'js/fake-order.min.js',
        'js/fake-order-config.js',
        'https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js',
        'js/js.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap4\BootstrapAsset',
        //'yii\bootstrap4\BootstrapAsset',
    ];
}
