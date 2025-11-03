<?php

use app\widgets\CommentsWidget;
use app\widgets\PostWidget;

/** @var yii\web\View $this */
/** @var array<app\models\entities\PostEntity> $posts */

$this->title = 'Посты';
$this->registerJsFile('@web/js/commentsSwitcher.js');
?>
<div class="site-index">
    <span>Посты</span>

    <div class="mt-3">
        <?php foreach ($posts as $post): ?>
            <?= PostWidget::widget(['postEntity' => $post]) ?>
        <?php endforeach; ?>

        <div class="border border-secondary p-3 mb-5">
            <div class="text-secondary">Опубликовано - 1 час назад</div>
            <div class="h3">Some title on the post</div>
            <span>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dignissimos dolorem
                dolores
                sapiente vel, odit rem placeat perferendis voluptatibus labore iure nam, corrupti omnis soluta.
                Consequatur itaque suscipit saepe sed possimus assumenda repudiandae exercitationem? At iste recusandae
                doloremque blanditiis obcaecati nisi. Accusantium amet, veniam facere culpa sapiente, ipsum ipsa labore
                tempore asperiores voluptate dignissimos ducimus doloremque praesentium officiis officia a inventore!
                Cupiditate quibusdam, laboriosam mollitia, ad repellat iusto repudiandae quod obcaecati velit totam
                aspernatur fuga ullam alias. Quibusdam maiores quaerat exercitationem sed, ab velit similique ipsa iusto
                provident debitis excepturi modi, accusantium aspernatur distinctio aliquid vero alias laboriosam porro
                est?
                            </span>

            <div class="mt-3">
                <a class="btn btn-primary" id="comments-switcher-btn">Комментарии</a>
            </div>

            <div class="d-none" id="comments-widget">
                <?= CommentsWidget::widget() ?>
            </div>
        </div>

        <div class="border border-secondary p-3">
            <div class="text-secondary">Опубликовано - 1 час назад</div>
            <div class="h3">Some title on the post</div>
            <span class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dignissimos dolorem
                dolores
                sapiente vel, odit rem placeat perferendis voluptatibus labore iure nam, corrupti omnis soluta.
                Consequatur itaque suscipit saepe sed possimus assumenda repudiandae exercitationem? At iste recusandae
                doloremque blanditiis obcaecati nisi. Accusantium amet, veniam facere culpa sapiente, ipsum ipsa labore
                tempore asperiores voluptate dignissimos ducimus doloremque praesentium officiis officia a inventore!
                Cupiditate quibusdam, laboriosam mollitia, ad repellat iusto repudiandae quod obcaecati velit totam
                aspernatur fuga ullam alias. Quibusdam maiores quaerat exercitationem sed, ab velit similique ipsa iusto
                provident debitis excepturi modi, accusantium aspernatur distinctio aliquid vero alias laboriosam porro
                est?<span>
        </div>
    </div>
</div>