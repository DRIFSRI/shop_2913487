<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Countries</h1>
<ul>
    <?php foreach ($countries as $country): ?>
        <li>
            <?= Html::encode("{$country->name} ({$country->price})") ?>:
<!--            --><?//= $country->population    ?>
        </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
<!---->
<?php
//
//use yii\helpers\Html;
//use yii\grid\GridView;
//
///* @var $this yii\web\View */
///* @var $dataProvider yii\data\ActiveDataProvider */
//
//$this->title = 'Products';
//$this->params['breadcrumbs'][] = $this->title;
//?>
<!--<div class="product-index">-->
<!---->
<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    <p>-->
<!--        --><?//= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->
<!---->
<!---->
<!--    --><?//= GridView::widget([
//        'dataProvider' => $dataProvider,
//        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
//
//            'id',
//            'name',
//            'price',
//
//            ['class' => 'yii\grid\ActionColumn'],
//        ],
//    ]); ?>
<!---->
<!---->
<!--</div>-->
