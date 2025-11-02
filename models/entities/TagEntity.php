<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "tbl_tag".
 *
 * @property int $id
 * @property string $name
 * @property string $frequency
 */
class TagEntity extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_tag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'frequency'], 'required'],
            [['name', 'frequency'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'frequency' => 'Frequency',
        ];
    }

}
