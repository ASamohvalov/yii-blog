<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "tbl_comment".
 *
 * @property int $id
 * @property int $author
 * @property string $email
 * @property string|null $url
 * @property string|null $content
 * @property bool $is_approed
 */
class CommentEntity extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url', 'content'], 'default', 'value' => null],
            [['author', 'email', 'is_approed'], 'required'],
            [['author'], 'integer'],
            [['content'], 'string'],
            [['is_approed'], 'boolean'],
            [['email', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'email' => 'Email',
            'url' => 'Url',
            'content' => 'Content',
            'is_approed' => 'Is Approed',
        ];
    }

}
