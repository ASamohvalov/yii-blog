<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\entities\CommentEntity $model */

$this->title = 'Update Comment Entity: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Comment Entities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comment-entity-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
