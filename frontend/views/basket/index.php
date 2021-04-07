<?php
//foreach ($order as $product)
//{
//    $product->name;
//    $product->price;
//}
?>
<div class="basket">
    <div classs="basket_title">
        <?="Корзина №".$order->id?>
    </div>
    <div class="basket_list">
        <?php foreach ($order as $product): ?>
            <div class="product" id =<?=$product->id?> >
            <div class="image">
                <a href=<?="/catalog/".$product->id?>>
                    <img class="img" src=<?=$product->image?>>
                </a>
            </div>
            <div class="info">
               <div class="title">
                    <?="{$product->name}" ?>
                </div>
                <div class="parametr">
                    <?php
                    foreach($product->parametrs as $parametr)
                    {
                        echo($parametr->name.'</br>');
                    }
                    ?>
                </div>
            </div>
            <div class="price">
                <div class="specification">Цена:</div>
                <div class="number"><?="{$product->price}"?></div>
            </div>
            <div class="get">
                <?= \yii\bootstrap\Html::Button('-',['class'=>'btn-minus','data-id'=>$product->id,'data-change'=>-1])?>
                <div class="count" ><?=$product->count?></div>
                <?= \yii\bootstrap\Html::Button('+',['class'=>'btn-plus','data-id'=>$product->id,'data-change'=>1]) ?>
            </div>
            <div class="sum_price" >
                <?=$product->price * $product->count?>
            </div>
            <div class="get">
                <?= \yii\bootstrap\Html::Button('delete',['class'=>'btn-delete','data-id'=>$product->id])?>
            </div>
        </div>
        <?php endforeach;?>

        <div class="chech">
            <div class="total_price">
                <div class="specification">
                    Итоговая цена:
                </div>
                <div class = 'number'>
                    <?=array_sum(array_column($order,'price'));?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
$js = <<<JS
function updatePage() {
    var array2=$('.product');
            console.log(array2);
            
    $('.total_price .number')[0].innerText='';
    $.each(array2,function(key,value){
        $('.total_price .number')[0].innerText=parseInt($('.total_price .number')[0].innerText)+
        value.getElementsByClassName( 'sum_price')[0].innerText=value.getElementsByClassName( 'number')[0].innerText * value.getElementsByClassName( 'count')[0].innerText;
        console.log(key);
    })
    
}

    $(function() {
        $(document).on('click', '.btn-plus,.btn-minus', function(){
            console.log('==this==', this.dataset.id);
            var id =this.dataset.id;
            $.ajax({
                url: '/ajax/exchangecountproduct',
                method: 'post',
                cache: true,
                data: {
                    'id': this.dataset.id,
                    'count':$('div#'+this.dataset.id+' .count')[0].innerText=parseInt(this.dataset.change,10)+parseInt($('div#'+this.dataset.id+' .count')[0].innerText,10)
                },
                datatype:JSON,                
                success: function(data) {
                    console.log('success ==data==', data);
                },
                error: function(data) {
                    console.log('error ==data==', data);
                }
            })
            updatePage();
        })
        $(document).on('click', '.btn-delete', function(){
            var id =this.dataset.id
            $.ajax({
                url: '/ajax/deleteproduct',
                method: 'post',
                cache: true,
                data: {
                    'id': this.dataset.id,
                },
                datatype:JSON,                
                success: function(data) {
                    console.log('success ==data==', data);
                },
                error: function(data) {
                    console.log('error ==data==', data);
                }
            })
            $("#"+id).remove();
            updatePage();
        })
    });
JS;

$this->registerJs(
    $js,
    \yii\web\View::POS_END,
    'myscript'
);
?>