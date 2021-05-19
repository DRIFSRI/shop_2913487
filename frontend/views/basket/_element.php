<th class="id">
    <?=$model['products']->id?>
</th>
<th class="info">
    <div class="image">
        <a href=<?="/catalog/".$model['products']->id?>>
            <img class="img" src=<?=$model['products']->image?>>
        </a>
    </div>

    <div class="name">
        <?="{$model['products']->name}" ?>
    </div>
    <div class="parametr">
        <?php
        foreach($model['products']->parametrs as $parametr)
        {
            echo($parametr->name.'</br>');
        }
        ?>
    </div>
</th>
<th class="price">
    <div class="specification">Цена:</div>
    <div class="number"><?="{$model['products']->price}"?></div>
    <div class="scroll">
        <?= \yii\bootstrap\Html::Button('-',['class'=>'btn-minus','data-id'=>$model['products']->id,'data-change'=>-1])?>
        <div class="count" ><?=$model['count']  ?></div>
        <?= \yii\bootstrap\Html::Button('+',['class'=>'btn-plus','data-id'=>$model['products']->id,'data-change'=>1]) ?>
    </div>
</th>
<th class="sum_price" >
    <?= $model['products']->price*$model['count']?>
</th>
<th class="get">
    <?=\yii\bootstrap\Html::Button('delete',['class'=>'btn-delete','data-id'=>$model['products']->id])?>
</th>