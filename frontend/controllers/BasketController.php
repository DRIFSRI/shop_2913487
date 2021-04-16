<?php
namespace frontend\controllers;
use app\models\Baskets;
use app\models\BasketsProducts;
use yii\web\Controller;
class BasketController extends Controller
{
    /*
     * @return mixed
     */
    public function actionIndex()
    {

        $basket = Baskets::findOne(4);
        $products =$basket->products;

        return $this->render('index',['order'=>$products]);
    }
}