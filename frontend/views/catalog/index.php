<h1>Product</h1>
<div class="catalog_item">
    <?=\common\widgets\products_list::widget(["products"=>$products])?>
</div>

<?=\yii\widgets\LinkPager::widget(['pagination' => $pagination])?>
<?php
$dataProvider = new yii\data\ActiveDataProvider([
        'query' => \app\models\Products::find(),
    'pagination' => [
            'pageSize' => 5


































































































































































        ,
        ],
]);
?>
<??>
<div class="catalog_item">
    <?=\yii\widgets\ListView::widget([
        'dataProvider'=>$dataProvider,
        'itemView' => '_list',
        'itemOptions'=>['class'=>'product'],
        'options'=>['class'=>'product_list'],
        'summary'=>'',
    ])?>
</div>

<?echo \yii\grid\GridView::widget([
    'dataProvider' => $dataProvider,
]);?>
