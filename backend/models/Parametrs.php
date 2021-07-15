<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "parametrs".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property ProductsParametrs[] $productsParametrs
 * @property Products[] $products
 */
class Parametrs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parametrs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string'],
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
        ];
    }

    /**
     * Gets query for [[ProductsParametrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductsParametrs()
    {
        return $this->hasMany(ProductsParametrs::className(), ['parametrs_id' => 'id']);
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['id' => 'products_id'])->viaTable('products_parametrs', ['parametrs_id' => 'id']);
    }
}
