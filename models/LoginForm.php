<?php

namespace app\models;

use yii\base\Model;
use app\models\entities\UserEntity;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read UserEntity|null $user
 *
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user = false;

    /**
     * @return array the validation rules.
     */
    public function rules(): array
    {
        return [
            [['username', 'password'], 'required'],
            ['rememberMe', 'boolean'],
        ];
    }

    public function getEntity(): ?UserEntity
    {
        return UserEntity::findByUsername($this->username);
    }

    /**
     * Finds user by [[username]]
     *
     * @return UserEntity|null
     */
    public function getUser(): ?UserEntity
    {
        if ($this->_user === false) {
            $this->_user = UserEntity::findByUsername($this->username);
        }
        return $this->_user;
    }
}
