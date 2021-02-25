<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Countries</h1>
<ul>

    <?php foreach ($products as $product): ?>

        <li>
            <?= Html::encode("{$product['name']} ({$product['price']}):"
 //           ."{$product['value']}"
            )
            ?>
<!--            --><?//= $country->population    ?>
        </li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
