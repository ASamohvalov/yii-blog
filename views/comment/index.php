<?php

use app\models\entities\CommentEntity;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Comment Entities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-entity-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Comment Entity', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'author',
            'email:email',
            'url:url',
            'content:ntext',
            //'is_approed:boolean',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CommentEntity $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
