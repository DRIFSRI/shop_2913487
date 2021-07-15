<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Baskets */

$this->title = 'Create Baskets';
$this->params['breadcrumbs'][] = ['label' => 'Baskets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baskets-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
