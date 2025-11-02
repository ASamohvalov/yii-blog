<?php

namespace app\models\entities;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class UserEntity extends ActiveRecord implements IdentityInterface
{
    public static function tableName() : string
    {
        return '{{tbl_user}}';
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id) : ?UserEntity
    {
        return static::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null) : void
    {}

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username) : ?UserEntity
    {
        return static::find()->where(['username' => $username])->one();
    }

    /**
     * {@inheritdoc}
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey() : string
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey) : bool
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password) : bool
    {
        return $this->password === $password;
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave($insert) : bool
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->auth_key = \Yii::$app->security->generateRandomString();
            }
            return true;
        }
        return false;
    }
}
