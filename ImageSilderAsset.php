<?php
namespace aki\imageslider;
/**
* @author <akbar.joody@gmail.com>
*/
class ImageSilderAsset extends \yii\web\AssetBundle
{
	public $depends = [
		'yii\web\JqueryAsset',
		'yii\bootstrap\BootstrapAsset',
		'yii\bootstrap\BootstrapPluginAsset',
	];
}