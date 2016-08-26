<?php
namespace aki\imageslider\assetbundles;
/**
* @author <akbar.joody@gmail.com>
*/
class ImageSilderAsset extends \yii\web\AssetBundle
{
	public $sourcePath = '@common/components/assets/imageslider';
	public $depends = [
		'yii\web\JqueryAsset',
		'yii\bootstrap\BootstrapAsset'
	];
}