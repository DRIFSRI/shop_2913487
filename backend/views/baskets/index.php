<?php
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Baskets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baskets-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Create Baskets', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <d>

    </d>

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
</div>