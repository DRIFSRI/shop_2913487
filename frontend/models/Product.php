<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property float $price
 * @property string $name
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'price', 'name'], 'required'],
            [['id'], 'integer'],
            [['price'], 'number'],
            [['name'], 'string'],
        ];
    }
/*
    public function getParametrProduct()
    {
        return $this->hasMany(ParametrProduct::className(), ['parametr_id' => 'id']);
    }*/

    public function getParametrs()
    {
        return $this->hasMany(Parametr::className(), ['id' => 'parametr_id'])
            ->viaTable('parametr_product',['product_id'=>'id']);
//        return $this->hasMany(ParametrProduct::className(), ['parametr_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'price' => 'Price',
            'name' => 'Name',
        ];
    }
}
