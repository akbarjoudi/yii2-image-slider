Image Slider
============
Image Slider for yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require aki/yii2-image-slider "*"
```

or add

```
"aki/yii2-image-slider": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \aki\imageslider\ImageSlider::widget([
	'baseUrl' => Yii::getAlias('@web/images'),
    'nextPerv' => false,
    'indicators' => false,
    'height' => '170px',
    'classes' => 'img-rounded',
    'images' => [
        [
            'active' => true,
            'src' => 'image/a.jpg',
            'title' => 'image',

        ],
        [
            'src' => 'image/b.jpg',
            'title' => 'image',
    	]
    ],
]); ?>```