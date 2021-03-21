<?php \yii\widgets\Pjax::begin([]);?>
    <?php $form = \yii\widgets\ActiveForm::begin([
        'id' => 'buy',
        'method' => 'POST',
            'action' => '/basket/add?id='.$id,
        'options' => ['data' => ['pjax' => true]]
    ]);?>
        <?= \yii\bootstrap\Html::Button('Купить') ?>
    <?php \yii\widgets\ActiveForm::end(); ?>
<?php \yii\widgets\Pjax::end();?>
