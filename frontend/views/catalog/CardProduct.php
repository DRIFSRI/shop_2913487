<?php
$this->title = 'Католог:';
$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => ['/catalog']];
$this->params['breadcrumbs'][] = ['label' => 'Карта продукта', 'url' => [$product->id]];
?>

<?php
echo \yii\widgets\DetailView::widget([
    'model'=>$product,
     'attributes'=>[
         'id',
         'price',
         [
             'label'=>'image',
             'value'=>$product->url,
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