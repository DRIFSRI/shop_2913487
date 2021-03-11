<h1>Product</h1>
<div class="catalog_item">
<?=\common\widgets\products_list::widget(["products"=>$products])?>

</div>
<script>
    $(document).ready(function() {
        alert('jQuery работает');
    });
</script>

<?=\yii\widgets\LinkPager::widget(['pagination' => $pagination])?>