<h1>Продукты</h1>
<?php
$dataProvider = new yii\data\ActiveDataProvider([
        'query' => \app\models\Products::find(),
    'pagination' => [
            'pageSize' => 5 ,
        ],
]);
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