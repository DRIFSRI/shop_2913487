<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products_parametrs".
 *
 * @property int $products_id
 * @property int $parametrs_id
 *
 * @property Products $products
 * @property Parametrs $parametrs
 */
class ProductsParametrs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products_parametrs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['products_id', 'parametrs_id'], 'required'],
            [['products_id', 'parametrs_id'], 'integer'],
            [['products_id', 'parametrs_id'], 'unique', 'targetAttribute' => ['products_id', 'parametrs_id']],
            [['products_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['products_id' => 'id']],
            [['parametrs_id'], 'exist', 'skipOnError' => true, 'targetClass' => Parametrs::className(), 'targetAttribute' => ['parametrs_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'products_id' => 'Products ID',
            'parametrs_id' => 'Parametrs ID',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasOne(Products::className(), ['id' => 'products_id']);
    }

    /**
     * Gets query for [[Parametrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParametrs()
    {
        return $this->hasOne(Parametrs::className(), ['id' => 'parametrs_id']);
    }
}
