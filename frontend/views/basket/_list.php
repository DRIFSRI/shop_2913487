<div class="title">
    <?="Корзина"?>
</div>
<?php
    $query = \app\models\BasketsProducts::find()->where(['baskets_id' => $basket_id])->with('products');
    $dataProvider = new \yii\data\ActiveDataProvider([
        'query' => ($query),
        'pagination' => [
            'pageSize' => 5,
        ],
    ]);
    //echo '888 <pre>'; var_dump($query->all()); echo "</pre>\n<br>";
    //exit;
    $fun = function ($model, $key, $index, $widget) {
        return ['class' => 'product', 'id' => $key['products_id'],'tag'=> 'tr'];
    };
    $title =
'<tr class="preambula"><td colspan="7">Товары в корзине </td></tr>
<tr class="preambula">
    <td class = id>id</td>
    <td class = name>Наименование</td>
    <td class = count>Кол-во</td>
    <td class = price>Цена,руб</td>
    <td>X</td>
</tr>';
    echo $list = \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_element',
        'itemOptions' => $fun,
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
