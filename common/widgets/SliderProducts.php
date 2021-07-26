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
        $dataProvider = new ActiveDataProvider([
            'query'=>Products::find()->/*select(['id','img'])->*/where(['category_id'=>$this->categories_id])->limit($this->limit),
            'pagination'=>false,
        ]);
        return $this->render('SliderProducts',
            [
                'dataProvider'=>$dataProvider,
                'label_name'=>Categories::find()->where(['id'=>$this->categories_id])->one()->name,

            ]
        );
    }
}