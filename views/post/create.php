<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\entities\PostEntity $model */

$this->title = 'Create Post Entity';
$this->params['breadcrumbs'][] = ['label' => 'Post Entities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-entity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
