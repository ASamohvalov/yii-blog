<?php

/** @var app\models\entities\PostEntity $postEntity */
?>
<div class="border border-secondary p-3 mb-5">
    <div class="text-secondary">Опубликовано - 1 час назад</div>
    <div class="h3"><?= '$postEntity->title' ?></div>
    <span><?= '$postEntity->content' ?></span>

    <div class="mt-3">
        <a class="btn btn-primary" id="comments-switcher-btn">Комментарии</a>
    </div>

    <div class="d-none" id="comments-widget">
    </div>
</div>