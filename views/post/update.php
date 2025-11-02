<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\entities\PostEntity $model */

$this->title = 'Update Post Entity: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Post Entities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="post-entity-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
