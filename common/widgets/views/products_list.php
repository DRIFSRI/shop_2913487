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
    </div>
<?php endforeach;?>