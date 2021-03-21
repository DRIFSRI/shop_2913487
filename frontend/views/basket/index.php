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
                <?=\common\widgets\products_list::widget(['products' => $order])?>
            </div>
        </div>
    </div>
<?php
?>