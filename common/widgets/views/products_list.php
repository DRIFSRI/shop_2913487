<?php foreach ($products as $product): ?>
    <div class="product_wrapp block">
        <div class="image_wrapper_block" style="width: 1px">
            <a href=<?="/catalog/".$product->id?>>
                <img class="img" src=<?=$product->image?>>
            </a>
        </div>
        <div class="product_info">
            <div classs="product_title">
                <?="{$product->name}" ?>
            </div>
            <div class="product_price">
                <?="{$product->price}"?>
            </div>
        </div>
        <?= \yii\helpers\Html::button('В корзину',['class'=>'basket','data-id'=>$product->id]);?>
    </div>
<?php endforeach;?>
<?php
$js = <<<JS
        
    $(function() {
        var list = $('button.basket');
        
        $(document).on('click', 'button.basket', function(){
            console.log('==this==', this.dataset.id);
            $.ajax({
                url: '/ajax/add',
                method: 'post',
                cache: true,
                data: {
                    'id': this.dataset.id
                },
                datatype:JSON,                
                success: function(data) {
                    console.log('success ==data==', data);
                },
                error: function(data) {
                    console.log('error ==data==', data);
                }
            })
        })
    });
JS;

$this->registerJs(
    $js,
    \yii\web\View::POS_END,
    'myscript'
    );
?>