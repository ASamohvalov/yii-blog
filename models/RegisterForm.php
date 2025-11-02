<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\entities\UserEntity;

class RegisterForm extends Model
{
    public string $username = '';
    public string $password = '';
    public string $email = '';

    public function rules(): array
    {
        return [
            [['username', 'password', 'email'], 'required'],
            ['email', 'email']
        ];
    }

    public function getEntity(): UserEntity 
    {
        $user = new UserEntity();
        $user->username = $this->username;
        $user->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
        $user->email = $this->email;
        $user->profile = '123';
        $user->salt = '123';
        return $user;
    }

    public function isUsernameTaken(): bool
    {
        return UserEntity::findByUsername($this->username) !== null;
    }
}