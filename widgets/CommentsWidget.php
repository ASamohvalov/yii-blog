<?php

namespace app\widgets;

use yii\base\Widget;

class CommentsWidget extends Widget
{
    public function run(): string
    {
        return $this->render('comments');
    }
}