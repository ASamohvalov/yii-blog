<?php

namespace app\models\entities;

use Yii;

/**
 * This is the model class for table "tbl_lookup".
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $type
 * @property int $position
 */
class LookupEntity extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_lookup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'code', 'type', 'position'], 'required'],
            [['position'], 'integer'],
            [['name', 'code', 'type'], 'string', 'max' => 255],
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
            'code' => 'Code',
            'type' => 'Type',
            'position' => 'Position',
        ];
    }

}
