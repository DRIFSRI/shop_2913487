<?php
/**
 * Created by PhpStorm.
 * User: Uweroy
 * Date: 04.06.2021
 * Time: 10:39
 */

namespace frontend\controllers;

use yii\web\Controller;

class DeliveryController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index.php', []);
    }
}