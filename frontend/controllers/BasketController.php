<?php
namespace frontend\controllers;
use app\models\Baskets;
use app\models\BasketsProducts;
use yii\web\Controller;

//Контроллер корзины
class BasketController extends Controller
{
    public function actionTest(){
        return $this->render('test.php',[]);
    }
    public function actionTest2(){
        return $this->render('test2.php',[]);
}


    /*
     *
$criteria=new CDbCriteria;
$criteria->with=array(
    'author.profile',
    'author.posts',
    'categories',
);
$posts=Post::model()->findAll($criteria);
или

$posts=Post::model()->findAll(array(
    'with'=>array(
        'author.profile',
        'author.posts',
        'categories',
    )
));
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $basket_id= $_COOKIE['basket_id'];
        return $this->render('index',['basket_id'=>$basket_id,'model'=> BasketsProducts::find()]);
    }
}