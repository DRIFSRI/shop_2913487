<?php

namespace app\models;

use Yii;
use yii\db\Query;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $parent_id
 *
 * @property Categories $parent
 * @property Categories[] $categories
 * @property Products[] $products
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id']
                , 'integer'],
            [['name'], 'string', 'max' => 10],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['parent_id' => 'id']],
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
            'parent_id' => 'Parent ID',
        ];
    }

    /*
     *@return Query
    */
    public static function getProductsByGroup($categories_id){


/*
//        $rows = Products::find()->select('id')->with(['c1ategory'=>['together'=>false]])->together()->all();
        $rows = Products::find()
//                                ->select('id')
                                ->leftJoin('categories','categories.id=products.category_id')
                                ->where('categories.id=14')
                                ->orWhere('categories.parent_id=10')
                                ->orderBy('products.id desc')
                                ->all();
*/
        $rows = Products::find()
            ->joinWith('category')
            ->where('categories.id='.$categories_id)
            ->orWhere('categories.parent_id='.$categories_id)
            ->orderBy('products.id desc')
            ;
    return $rows;
    return Products::find()->select('id')->with('category')->where(['id'=>'9', 'sdfsad'=>1])->all();
//        return Categories::find()->with('products1')->where(['id'=>9])->orWhere(['parent_id'=>9])->all();
    }

    /**
     * Gets query for [[Parent]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Categories::className(), ['id' => 'parent_id']);
    }
    /**
     * Gets query for [[Categories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Categories::className(), ['parent_id' => 'id']);
    }
    public function getProductsCategories(){
        return $this->hasMany(Products::className(),['category_id'=>'id'])->via('categories');
    }
    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Products::className(), ['category_id' => 'id']);
    }
}