<div class="demo">
    <h1 style="font-size: 18px;"><?=$product->name?></h1>
    <div class="product">
        <div>
            <img class="img" src=<?=$product->image?>>
        </div>
        <div class="price">
            <?=$product->price?>
        </div>
    </div>
</div>
<?= \common\widgets\buy::widget([]);?>