<?php
$products = $dataProvider->models;
echo $label_name;
echo '<pre>'; var_dump((new \yii\db\Query())->select('*'))->from('products'); echo "</pre>\n<br>";

$items = array_map(function($ar){return \yii\helpers\Html::img($ar->url,['title'=>$ar->name]);},$products);
echo yii2mod\bxslider\BxSlider::widget([
    'pluginOptions' => [
        'mode'=>'fade',
        'captions'=>'true',
        'auto'=> true,
        'stopAutoOnClick'=> true,
        'pager'=> true,
        'speed'=>100,
        'slideWidth'=> 1000,
        'pause'=>1000,
        'maxSlides'=>3,
    ],
    'items' => $items
]);
?>