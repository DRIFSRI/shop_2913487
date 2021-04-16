<div class="image" style="width: 1px">
    <a href=<?="/catalog/".$model->id?>>
        <img class="img" src=<?=$model->image?>>
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
        <?="{$model->name}" ?>
    </div>

    <div class="price">
        <?="{$model->price}"?>
    </div>

    <div class="presence">
        <?=$model->count>0?'В наличие':'Нет в наличии'?>
    </div>
</div>
<?= \yii\helpers\Html::button('В корзину',['class'=>'basket','data-id'=>$model->id]);?>