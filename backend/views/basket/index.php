<?php
use yii\helpers\Html;
use yii\grid\GridView;


$this->title = 'Baskets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class = "basket">
    <h1><?=Html::encode($this->title)?></h1>
    <p>
    <?=Html::a('Show basket',['index'],['class'=>'btn btn-success']);?>
    </p>
    <?php
    echo '<pre>'; var_dump($basket); echo "</pre>\n<br>";
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'user',
            [
                'class' => \yii\grid\ActionColumn::class,
            ],
        ],
    ]); ?>

    <?php
    //GridView::widget([
//        'dataProvider'=>$dataProdider,
//        'id_product',
//        'product_name',
//        'product_image',
//        'product_categoria',
//        'price',
//        'Наличие',
//        'user_creater',
//    ]);
    ?>

</div>