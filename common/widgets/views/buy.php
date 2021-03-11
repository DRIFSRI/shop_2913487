<?php yii\bootstrap\Button::widget([
        'label'=>'Action',
        'options'=>['class'=>'btn-lg'],
])?>

<?php $form = \yii\widgets\ActiveForm::begin(['id' => 'buy','action' => '/product']);?>
    <div class="form-group">
        <?= \yii\bootstrap\Html::submitButton('Купить') ?>
    </div>
<?php \yii\widgets\ActiveForm::end(); ?>