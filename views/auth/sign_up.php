<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\RegisterForm $model */

$this->title = 'Регистрация';
?>

<div class="shadow p-4 mx-auto" style="width: 600px; margin-top: 10%">
    <?php $form = ActiveForm::begin(); ?>

    <div class="text-center h4 mb-4">Регистрация</div>
    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= $form->field($model, 'confirmPassword')->passwordInput() ?>
    <?= $form->field($model, 'email') ?>
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-dark mt-2']) ?>

    <?php ActiveForm::end(); ?>
</div>