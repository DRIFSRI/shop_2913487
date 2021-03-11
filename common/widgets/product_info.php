<?php
namespace common\widgets;



use yii\base\Widget;

class product_info extends Widget
{
    public $product;
    function init()
    {
        parent::init();
    }
    function run()
    {
        return $this->render("product_info",["product"=>$this->product]);
    }

}