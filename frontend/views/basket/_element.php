<td class="id">
    <?=$model['products']->id?>
</td>
<td>
    <div class="image">
        <a href=<?="/catalog/".$model['products']->id?>>
            <img class="img" src=<?=$model['products']->image?>>
        </a>
    </div>
</td>
<td class="info">
    <a href=<?="/catalog/".$model['products']->id?> class="name underline">
        <?="{$model['products']->name}" ?>
    </a>
    <div class="parametr">
        <?php
        foreach($model['products']->parametrs as $parametr)
        {
            echo($parametr->name.'</br>');
        }
        ?>
    </div>
</td>
<td class="price">
    <div class="specification">Цена:</div>
    <div class="number"><?="{$model['products']->price}"?></div>
    <div class="scroll">
        <?= \yii\bootstrap\Html::Button('-',['class'=>'btn-minus','data-id'=>$model['products']->id,'data-change'=>-1])?>
        <div class="count" ><?=$model['count']  ?></div>
        <?= \yii\bootstrap\Html::Button('+',['class'=>'btn-plus','data-id'=>$model['products']->id,'data-change'=>1]) ?>
    </div>
</td>
<td class="sum_price" >
    <?= $model['products']->price*$model['count']?>
</td>
<td class="get">
    <?=\yii\bootstrap\Html::Button('delete',['class'=>'btn-delete','data-id'=>$model['products']->id])?>
</td>