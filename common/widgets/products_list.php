<?php

namespace common\widgets;


use yii\base\Widget;
use yii\helpers\Html;


class products_list extends Widget
{
    public $products=[];

    public function run()
    {
        return $this->render('products_list',['products'=>$this->products]);
    }
}