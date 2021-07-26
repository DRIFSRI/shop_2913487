<h1>Продукт</h1>
<?php
$dataProvider = new yii\data\ActiveDataProvider([
    'query' => \app\models\Products::find(),
]);
?>

<div class="catalog_item">
    <?=\yii\widgets\ListView::widget([
        'dataProvider'=>$dataProvider,
        'itemView' => '_list',
        'itemOptions'=>['class'=>'product'],
        'options'=>['class'=>'product_list'],
        'summary'=>'',
    ])?>
</div>
<?= \yii\helpers\Html::button('В корзину',['class'=>'basket','data-id'=>$product->id]);?>
