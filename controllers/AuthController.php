<?php

namespace app\controllers;

use app\models\LoginForm;
use app\models\RegisterForm;
use Yii;
use yii\base\Controller;
use yii\base\Response;

class AuthController extends Controller
{
    public function actionSignIn(): string | Response
    {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $user = $model->getEntity();
            if ($user === null || $user->validatePassword($model->password)) {
                return $this->render('sign_in', [
                    'model' => $model,
                    'error_msg' => 'Неправильная почта или пароль'
                ]);
            }
            $user = $model->getEntity();
            Yii::$app->user->login($user);
            return Yii::$app->response->redirect(['site/index']);
        }
        return $this->render('sign_in', ['model' => $model]);
    }

    public function actionSignUp(): string | Response
    {
        $model = new RegisterForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->isUsernameTaken()) {
                return $this->render('sign_up', [
                    'model' => $model,
                    'error_msg' => 'Данное имя пользователя уже занято'
                ]);
            }
            $user = $model->getEntity();
            $user->save();
            Yii::$app->user->login($user);
            return Yii::$app->response->redirect(['site/index']);
        }
        return $this->render('sign_up', ['model' => $model]);
    }

    public function actionLogout(): Response
    {
        Yii::$app->user->logout();
        return Yii::$app->response->redirect(['site/index']);
    }
}