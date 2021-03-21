<?php foreach ($products as $product): ?>
    <div class="product_wrapp block">
        <div class="image_wrapper_block" style="width: 1px">
            <a href=<?="/catalog/search/?id=".$product->id?>>
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
        <?//= \common\widgets\buy::widget(['id'=>$product->id])?>
        <?= \yii\helpers\Html::button('В корзину',['class'=>'basket','data-id'=>$product->id]);?>
        <div id="rrr-<?=$product->id?>"></div>
    </div>
<?php endforeach;?>
<?php
$js = <<<JS
        
    $(function() {
        // var list = $('button.basket')[1].dataset.name;
        var list = $('button.basket');
        
       
         console.log('======>', list);
        
        for (obj of list) {
            // console.log('======>', obj, obj.dataset);
            $('div#rrr-' + obj.dataset.id).html('name-'+obj.dataset.id);
            
            
        }
        
        
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