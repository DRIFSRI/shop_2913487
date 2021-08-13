<?php
    $query = \app\models\BasketsProducts::find()->where(['baskets_id' => $basket_id])->joinWith('products');
    $dataProvider = new \yii\data\ActiveDataProvider([
        'query' => ($query),
        'pagination' => [
            'pageSize' => 0,
        ],
    ]);
    $title =
        '
    <tr class="preambula"><th colspan="7"><span>Товары в корзине</span> </th></tr>
    <tr class="preambula">
        <th class = id><span>id</span></th>
        <th class = name colspan="2"><span>Наименование</span></th>
        <th class = count><span>Количество</span></th>
        <th class = price><span>Цена,руб</span></th>
        <th><span>X</span></th>
    </tr>';
    echo $list =
        \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_element',
        'itemOptions' => function ($model, $key, $index, $widget) {
        return ['class' => 'product', 'id' => $key['products_id'],'tag'=> 'tr'];},
        'options' => ['class' => 'basket_list','tag'=>'table'],
        'summary' => $title,
//        'layout'=>"{summary}\n{items}\n{summary}",
//        'ShowOnEmpty'=>'false',
        'emptyText'=>'Корзина пуста',
        'emptyTextOptions'=>['class'=>'empty'],
    ]);?>
    <div class="chech">
        <div class="total_price">
            <div class="specification">
                Итоговая цена:
            </div>
            <div class = 'number'>
                JSCODE
            </div>
        </div>
    </div>