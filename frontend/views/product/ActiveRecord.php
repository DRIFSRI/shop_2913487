<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Product</h1>
<div class="catalog_item">
<?=\common\widgets\products_list::widget(["products"=>$products])?>
</div>
<?=LinkPager::widget(['pagination' => $pagination])?>


<!---->
<?php
//$parametrs = $product->parametrs;
//
//foreach ($parametrs as $parametr):?>
<!--    --><?//=Html::encode(":{$parametr['value']}({$parametr['name']}) ")?>
<?php //endforeach;?>