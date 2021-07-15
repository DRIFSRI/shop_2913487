<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string|null $name
 * @property float|null $price
 * @property string|null $image
 * @property int|null $count
 * @property int|null $category_id
 *
 * @property BasketsProducts[] $basketsProducts
 * @property Baskets[] $baskets
 * @property Categories $category
 * @property ProductsParametrs[] $productsParametrs
 * @property Parametrs[] $parametrs
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string'],
            [['price'], 'number'],
            [['count', 'category_id'], 'integer'],
            [['image'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
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
            'price' => 'Price',
            'image' => 'Image',
            'count' => 'Count',
            'category_id' => 'Category ID',
        ];
    }

    /**
     * Gets query for [[BasketsProducts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBasketsProducts()
    {
        return $this->hasMany(BasketsProducts::className(), ['products_id' => 'id']);
    }

    /**
     * Gets query for [[Baskets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBaskets()
    {
        return $this->hasMany(Baskets::className(), ['id' => 'baskets_id'])->viaTable('baskets_products', ['products_id' => 'id']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[ProductsParametrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductsParametrs()
    {
        return $this->hasMany(ProductsParametrs::className(), ['products_id' => 'id']);
    }

    /**
     * Gets query for [[Parametrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParametrs()
    {
        return $this->hasMany(Parametrs::className(), ['id' => 'parametrs_id'])->viaTable('products_parametrs', ['products_id' => 'id']);
    }
}
