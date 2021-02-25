<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parametr_product".
 *
 * @property int $product_id
 * @property int $parametr_id
 */
class ParametrProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parametr_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'parametr_id'], 'required'],
            [['product_id', 'parametr_id'], 'integer'],
        ];
    }
//*
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
/*    public function getParametr()
    {
        return $this->hasMany(Parametr::className(), ['id' => 'parametr_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'parametr_id' => 'Parametr ID',
        ];
    }
}
