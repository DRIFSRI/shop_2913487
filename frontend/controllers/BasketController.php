<?php
namespace frontend\controllers;
use app\models\Baskets;
use app\models\BasketsProducts;
use yii\web\Controller;

//Контроллер корзины
class BasketController extends Controller
{
    /*
     * @return mixed
     */
    public function actionIndex()
    {
        $basket_id= $_COOKIE['basket_id'];
        return $this->render('index',['basket_id'=>$basket_id]);
    }
}