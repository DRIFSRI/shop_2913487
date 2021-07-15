<?//= \common\widgets\product_info::widget(['product'=>$product]) ?>
<?php
//echo '<pre>'; var_dump($product['id']); echo "</pre>\n<br>";

echo \yii\widgets\DetailView::widget([
    'model'=>$product,
     'attributes'=>[
         'id',
         'price',
         [
             'label'=>'image',
             'value'=>$product['image'],
             'format'=>['image',['width'=>'100','height'=>'100']]
         ],
        'count',
        'category_id',

//         [
//             'label'=>'Owner',
//             'value'=>['ds'],
//             'contentOptions'=>['class'=>'bg-red'],
//             'captionOprions'=>['tooltip'=>'Tooltip'],
//         ],
         'created_at:datetime',
     ]
    ]);