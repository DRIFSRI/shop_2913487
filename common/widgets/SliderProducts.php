<?php
namespace common\widgets;
use app\models\Products;
use backend\models\Categories;
use yii\base\Widget;
use yii\data\ActiveDataProvider;
class SliderProducts extends Widget
{
    public $config;
    public $categories_id;
    public $limit;
    public function run(){
        return $this->render('SliderProducts',
            [
                'products'=>\app\models\Categories::getProductsByGroup($this->categories_id)->all(),
                'title'=>Categories::find()->where(['id'=>$this->categories_id])->one()->name,
            ]
        );
    }
}