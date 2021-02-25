<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Product</h1>
<div class="catalog_item">
    <?php foreach ($products as $product): ?>
        <div class="product_wrapp block">
            <div class="image_wrapper_block">
                <a href=<?=$product->src?>>
                    <img class="img" src=<?=$product->src?>>
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
        </div>
    <?php endforeach;?>
</div>
<?= LinkPager::widget(['pagination' => $pagination]) ?>


<!---->
<?php
//$parametrs = $product->parametrs;
//
//foreach ($parametrs as $parametr):?>
<!--    --><?//=Html::encode(":{$parametr['value']}({$parametr['name']}) ")?>
<?php //endforeach;?>