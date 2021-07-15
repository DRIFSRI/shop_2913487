<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "baskets_products".
 *
 * @property int $baskets_id
 * @property int $products_id
 * @property int|null $count
 *
 * @property Baskets $baskets
 * @property Products $products
 */
class BasketsProducts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'baskets_products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['baskets_id', 'products_id'], 'required'],
            [['baskets_id', 'products_id', 'count'], 'integer'],
            [['baskets_id', 'products_id'], 'unique', 'targetAttribute' => ['baskets_id', 'products_id']],
            [['baskets_id'], 'exist', 'skipOnError' => true, 'targetClass' => Baskets::className(), 'targetAttribute' => ['baskets_id' => 'id']],
            [['products_id'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['products_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'baskets_id' => 'Baskets ID',
            'products_id' => 'Products ID',
            'count' => 'Count',
        ];
    }

    /**
     * Gets query for [[Baskets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBaskets()
    {
        return $this->hasOne(Baskets::className(), ['id' => 'baskets_id']);
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
}
