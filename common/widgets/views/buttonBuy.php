<?= \yii\helpers\Html::button('В корзину',['class'=>'basket','data-name'=>'basket-name-'.$id]);?>


<div id="rrr"></div>
<script>
    $(function() {
        var name = $('button.basket')[1].dataset.name;
        $('div#rrr').html(name);

    });
</script>
