<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Parametrs */

$this->title = 'Create Parametrs';
$this->params['breadcrumbs'][] = ['label' => 'Parametrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parametrs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
