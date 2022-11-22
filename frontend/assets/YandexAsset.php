<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class YandexAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

    ];
    public $js = [
        'https://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU',

    ];
    public $depends = [

    ];
}
