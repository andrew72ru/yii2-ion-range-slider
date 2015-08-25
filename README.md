Ion.Range Slider widget for yii2
================================
[Ion.Range Slider](https://github.com/IonDen/ion.rangeSlider) widget for yii2

To understand slider parameters please refer documentation of Ion.Range Slider [here](https://github.com/IonDen/ion.rangeSlider)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist andrew72ru/yii2-ion-range-slider "*"
```

or add

```
"andrew72ru/yii2-ion-range-slider": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use andrew72ru\ionrange\Slider;

<?= $form->field($model, 'attribute')->widget(Slider::className(), [
    'options' => [] // Html tag options
    'clientOptions' => [
        'type'  => 'double', // Slider type
        'grid'  => true,     // Whether is grid of values enabled or not
        'min'   => 0,        // min slider value
        'max'   => 100,      // max slider value
        'from'  => 10,       // start position for left handle
        'to'    => 90,       // start position for right handle
    ],
    'clientEvents' => [
        'onStart'  => 'function(data) { console.log(data) }',
        'onChange' => 'function(data) { console.log(data) }',
        'onFinish' => 'function(data) { console.log(data) }',
        'onUpdate' => 'function(data) { console.log(data) }',
    ]
]); ?>
```

When slider changes finished, input values set to `value0;value1`, where `value0` and `value1` are the positions of left and right handles separated by semicolon. In a form action it must be splitted or so.

