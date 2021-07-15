<div class="image">
    <a href=<?="/catalog/cardproduct/".$model->id?>>
        <?=\yii\helpers\Html::img($model->image,['class'=>'img'])?>
    </a>
</div>
<div class="rating">
    <?php common\widgets\Rating::widget();?>
</div>
<div class="info">
    <?php
    echo \yii\helpers\Html::tag('div',$model->name,['class'=>'title']);
    echo \yii\helpers\Html::tag('div',$model->price,['class'=>'price']);
    echo \yii\helpers\Html::tag('div',$model->count>0?'В наличие':'Нет в наличии',['class'=>'presence']);
    ?>
</div>
<?= \yii\helpers\Html::button('В корзину',['class'=>'basket','data-id'=>$model->id]);?>