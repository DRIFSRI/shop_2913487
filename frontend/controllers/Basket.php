<?php
/**
 * Created by PhpStorm.
 * User: Uweroy
 * Date: 10.03.2021
 * Time: 11:12
 */

namespace frontend\controllers;


use app\models\Baskets;

class Basket
{
    public function actionIndex()
    {
        Baskets::findOne(1);
    }
    public function actionAdd($id)
    {
        Baskets::findAll();
        //$data = \Yii::$app->request->post('');

    }
    public function delete($id)
    {

    }
}