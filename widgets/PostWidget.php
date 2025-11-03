<?php

namespace app\widgets;

use yii\base\Widget;

class PostWidget extends Widget
{
    public $postEntity;

    public function run(): string
    {
        return $this->render('post', ['postEntity' => $this->postEntity]);
    }
}