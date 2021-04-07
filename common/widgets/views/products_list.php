<?php foreach ($products as $product): ?>
    <div class="product_list">
        <div class="image" style="width: 1px">
            <a href=<?="/catalog/".$product->id?>>
                <img class="img" src=<?=$product->image?>>
            </a>
        </div>
        <div class="info">
            <div classs="title">
                <?="{$product->name}" ?>
            </div>
            <div class="price">
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