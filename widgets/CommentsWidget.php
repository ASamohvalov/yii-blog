<?php

namespace app\widgets;

use yii\base\Widget;

/**
 * The widget gets all the comments on the post from the database and displays them.
 */
class CommentsWidget extends Widget
{
    public function run(): string
    {
        return $this->render('comments');
    }
}