<?php
/**
 * Created by PhpStorm.
 * User: Uweroy
 * Date: 05.07.2021
 * Time: 18:17
 */
namespace backend\controllers;
use backend\models\Basket;
use backend\models\Baskets;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
class BasketController extends Controller
{
    public function actionIndex($basket_id)
    {
        $dataProvider = new ActiveDataProvider([
            'query'=>Baskets::find(),
        ]);
        $basket = Baskets::find()->where(['id'=>$basket_id])->asArray()->with("products");

        return $this->render('index',[
            'dataProvider'=>$dataProvider,
            'basket'=>$basket->all(),]);
    }
}