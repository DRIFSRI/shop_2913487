<?//= \common\widgets\product_info::widget(['product'=>$product]) ?>
<?php
\yii\widgets\DetailView::widget([
    'model'=>$product,
     'attributes'=>[
         'title','description:html',
         [
             'label'=>'Owner',
             'value'=>['ds'],
             'contentOptions'=>['class'=>'bg-red'],
             'captionOprions'=>['tooltip'=>'Tooltip'],
         ],
         'created_at:datetime',
     ]
    ]);

$dataProvider = new \yii\data\ActiveDataProvider([
    'query' => Post::find(),
    'pagination' => [
        'pageSize' => 20,
    ],
]);
echo \yii\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        // Обычные поля определенные данными содержащимися в $dataProvider.
        // Будут использованы данные из полей модели.
        'id',
        'image',
        // Более сложный пример.
        [
            'class' => 'yii\grid\DataColumn', // может быть опущено, поскольку является значением по умолчанию
            'value' => function ($data) {
                return $data->image; // $data['name'] для массивов, например, при использовании SqlDataProvider.
            },
        ],
    ],
]);
?>
