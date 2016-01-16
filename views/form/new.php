<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

if(Yii::$app->request->getUrl() == '/form/add-new') {
    $class = 'text-left';
}
else {
    $class = 'text-right';
}

$form = ActiveForm::begin([
    'id' => 'login_form',
    'options' => ['class' => $class],
]); ?>

<?= $form->field($user, 'name', [
    'inputOptions' => [
        'placeholder' => 'Имя',
        'class' => 'form-control'
    ],
    'errorOptions' => [
        'text' => 'asfsdgsd'
    ],
])->label('') ?>

<?= $form->field($user, 'email', [
    'inputOptions' => [
        'placeholder' => 'Email',
        'class' => 'form-control',
    ],
//    'errorOptions' => [
//        'error' => 'asfsdgsd'
//    ],
])->label('')->error(['options' => ['hint' => 'adg']]) ?>

<div class="form-group">
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary margin-30-top']) ?>
</div>

<?php ActiveForm::end(); ?>
