<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parametr".
 *
 * @property int $id
 * @property string $name
 * @property string $value
 */
class Parametr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parametr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'value'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 20],
            [['value'], 'string', 'max' => 30],
            [['id'], 'unique'],
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
            'value' => 'Value',
        ];
    }
}
