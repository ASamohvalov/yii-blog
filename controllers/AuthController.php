<?php

namespace app\controllers;

use yii\base\Controller;

class AuthController extends Controller
{
    public function actionSignIn() : string
    {
        return $this->render('sign_in');
    }

    public function actionSignUp() : string
    {
        return $this->render('sign_up');
    }

    public function actionLogout() : void
    {}
}