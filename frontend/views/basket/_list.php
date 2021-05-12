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
    echo $list = \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_element',
        'itemOptions' => $fun,
        'options' => ['class' => 'basket_list','tag'=>'table'],
        'summary' => '',
    ]);