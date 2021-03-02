<?php foreach ($products as $product): ?>
    <div class="product_wrapp block">
        <div class="image_wrapper_block" style="width: 1px">
            <a href=<?="/product/search/?id=".$product->id?>>
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