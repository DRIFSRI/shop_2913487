<?php
$this->title = $title;
$this->params['breadcrumbs'] = $breadcrumbs;
?>

<h1><?=$title?></h1>
<?php
$optionProduct = function ($model, $key, $index, $widget) {
    return ['class' => 'product', 'id' => $key];
};
?>
<div class="catalog_item">
    <?=\yii\widgets\ListView::widget([
        'dataProvider'=>$dataProvider,
        'itemView' => '_list',
        'itemOptions'=>$optionProduct,
        'options'=>['class'=>'product_list'],
        'summary'=>'',
    ])?>
</div>