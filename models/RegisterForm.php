<?php

namespace app\models;

use yii\base\Model;

class RegisterForm extends Model
{
    public string $username = '';
    public string $password = '';
    public string $email = '';

    /**
     * @return array the validation rules.
     */
    public function rules() : array
    {
        return [
            // username and password are both required
            [['username', 'password', 'email'], 'required'],
            ['email', 'email']
        ];
    }

    /**
     * Check username unique
     * 
     * @return bool 
     */
    public function isUsernameTaken() : bool
    {

    }
}