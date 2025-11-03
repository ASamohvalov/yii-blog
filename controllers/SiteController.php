<?php

namespace app\controllers;

use app\models\entities\PostEntity;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex() : string
    {
        $posts = PostEntity::find();
        return $this->render('index', ['posts' => $posts]);
    }
}
