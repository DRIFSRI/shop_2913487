<h1>Product</h1>
<div class="catalog_item">
<?=\common\widgets\products_list::widget(["products"=>$products])?>
</div>
<?=\yii\widgets\LinkPager::widget(['pagination' => $pagination])?>