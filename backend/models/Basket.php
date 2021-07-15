<?php
/**
 * Created by PhpStorm.
 * User: Uweroy
 * Date: 07.07.2021
 * Time: 17:46
 */

namespace backend\models;


use yii\base\Model;
use yii\db\ActiveRecord;

class Basket extends ActiveRecord
{
    private $_value;
    public function setValue($value){
        $this->_value = $value;
    }
    public function getValue(){
        return $this->_value;
    }


    public static function tableName(){
        return 'baskets';
    }
    public function rules()
    {
        return ['value'=>'integer'];
    }
    public function activeAttributes()
    {
        return ['value'=>'value'];
    }
//    public function rules(){
//        return [
//            ['id']=>'integer',
//            ['product_image','product_name']=>'char',
//        ];
//    }
//
//    public function attributeLabels()
//    {
//        return [
//            'id_product' => 'ID',
//            'product_name' => 'ID',
//            'product_image' => 'ID',
//            'product_categoria' => 'ID',
//            'price' => 'ID',
//            'Наличие' => 'ID',
//            'user_creater' => 'user',
//        ];
//    }

}