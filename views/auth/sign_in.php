<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

$this->title = 'Авторизация';
?>

<div class="shadow p-4 mx-auto" style="width: 600px; margin-top: 10%">
    <?php $form = ActiveForm::begin(); ?>

    <div class="text-center h4 mb-4">Авторизация</div>

    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= Html::submitButton('Войти', ['class' => 'btn btn-dark mt-2']) ?>

    <?php ActiveForm::end(); ?>
</div>