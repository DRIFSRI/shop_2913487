<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">
    <h1><?= Html::encode($this->title)?></h1>
    <p>
        <?php
        echo Html::a('Create Products', ['create'], ['class' => 'btn btn-success']);
        ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name:ntext',
            'price',
//            'image',
            'count',
            [
                'attribute'=>'category_id',
                'label'=>'Категория',
                'content'=>function($data){
                    return ($data['category']['name']);
                }
            ],
            [
                 'class' => 'yii\grid\ActionColumn'
            ],
        ],
    ]);?>
</div>