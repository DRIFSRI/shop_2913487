<div class="product_list">
    <?php foreach ($products as $product): ?>
        <div class="product">
            <div class="image" style="width: 1px">
                <a href=<?="/catalog/".$product->id?>>
                    <img class="img" src=<?=$product->image?>>
                </a>
            </div>
            <div class="rating">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" viewBox="0 0 15 13">
                    <path data-name="Shape" class="sscls-2"
                          d="M1333.37,457.5l-4.21,2.408,0.11,0.346,2.07,4.745h-0.72l-4.12-3-4.09,3h-0.75l2.04-4.707,0.12-.395-4.19-2.4V457h5.12l1.53-5h0.38l1.57,5h5.14v0.5Z"
                          transform="translate(-1319 -452)">
                    </path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" viewBox="0 0 15 13">
                    <path data-name="Shape" class="sscls-2"
                          d="M1333.37,457.5l-4.21,2.408,0.11,0.346,2.07,4.745h-0.72l-4.12-3-4.09,3h-0.75l2.04-4.707,0.12-.395-4.19-2.4V457h5.12l1.53-5h0.38l1.57,5h5.14v0.5Z"
                          transform="translate(-1319 -452)">
                    </path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" viewBox="0 0 15 13">
                    <path data-name="Shape" class="sscls-2"
                          d="M1333.37,457.5l-4.21,2.408,0.11,0.346,2.07,4.745h-0.72l-4.12-3-4.09,3h-0.75l2.04-4.707,0.12-.395-4.19-2.4V457h5.12l1.53-5h0.38l1.57,5h5.14v0.5Z"
                          transform="translate(-1319 -452)">
                    </path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" viewBox="0 0 15 13">
                    <path data-name="Shape" class="sscls-2"
                          d="M1333.37,457.5l-4.21,2.408,0.11,0.346,2.07,4.745h-0.72l-4.12-3-4.09,3h-0.75l2.04-4.707,0.12-.395-4.19-2.4V457h5.12l1.53-5h0.38l1.57,5h5.14v0.5Z"
                          transform="translate(-1319 -452)">
                    </path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" viewBox="0 0 15 13">
                    <path data-name="Shape" class="sscls-2"
                          d="M1333.37,457.5l-4.21,2.408,0.11,0.346,2.07,4.745h-0.72l-4.12-3-4.09,3h-0.75l2.04-4.707,0.12-.395-4.19-2.4V457h5.12l1.53-5h0.38l1.57,5h5.14v0.5Z"
                          transform="translate(-1319 -452)">
                    </path>
                </svg>
            </div>
            <div class="info">
                <div classs="title">
                    <?="{$product->name}" ?>
                </div>

                <div class="price">
                    <?="{$product->price}"?>
                </div>

                <div class="presence">
                    <?=$product->count>0?'В наличие':'Нет в наличии'?>
                </div>
            </div>
            <?= \yii\helpers\Html::button('В корзину',['class'=>'basket','data-id'=>$product->id]);?>
        </div>
    <?php endforeach;?>
</div>


<?php
$js =
    <<<JS
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