<?php
//foreach ($order as $product)
//{
//    $product->name;
//    $product->price;
//}
?>
<?php yii\bootstrap\Button::widget()?>
    <div class="basket">
        <div class="basket_info">
            <div classs="basket_title">
                <?="Корзина №".$order->id?>
            </div>
            <div class="basket_list">
                <?php foreach ($order as $product): ?>
                    <div class="basket_wrapp block">
                        <div class="image_wrapper_block" >
                            <a href=<?="/catalog/".$product->id?>>
                                <img class="img" src=<?=$product->image?> style="width: 50px">
                            </a>
                        </div>
                        <div class="product_info">
                            <div class="product_title" style="width: 50px">
                                <?="{$product->name}" ?>
                            </div>
                            <div class="product_price">
                                <?="{$product->price}"?>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
<?php
?>