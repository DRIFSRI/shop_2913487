<?php
namespace app\models;

use common\models\User;
use Yii;

/**
 * This is the model class for table "baskets".
 *
 * @property int $id
 * @property int|null $user
 *
 * @property User $user0
 * @property BasketsProducts[] $basketsProducts
 *          @property Products[] $products
 */
class Baskets extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'baskets';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user'], 'integer'],
            [['user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user' => 'id']],
        ];
    }

    public function relations()
    {
        return array(
            'basket'=>array(self::HAS_MANY,'Заказ','basket_id'),
            'products'=>array(self::MANY_MANY,'Продукты','products_parametrs(baskets_id,products_id)')
          );
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
        ];
    }

    /**
     * Gets query for [[User0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser0()
    {
        return $this->hasOne(User::className(), ['id' => 'user']);
    }

    /**
     * Gets query for [[BasketsProducts]].
     *
     * @return \yii\db\ActiveQuery
     */
//    public function getBasketsProducts()
//    {
//        return $this->hasMany(BasketsProducts::className(), ['baskets_id' => 'id']);
//    }
//
//    /**
//     * Gets query for [[Products]].
//     *
//     * @return \yii\db\ActiveQuery
//     */
//    public function getProducts()
//    {
//        return $this->hasMany(Products::className(), ['id' => 'products_id'])->viaTable('baskets_products', ['baskets_id' => 'id']);
//    }
}
