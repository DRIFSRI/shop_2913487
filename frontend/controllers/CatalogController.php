<?php
/**
 * Created by PhpStorm.
 * User: Uweroy
 * Date: 05.03.2021
 * Time: 19:18
 */
namespace frontend\controllers;
use app\models\Products;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\web\Controller;

//Контролер Католога
class CatalogController extends Controller
{
    /*
     * Отображение Каталога
     * @return mixed
     */
    public function actionIndex()
    {
        $query = Products::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10 ,
            ],
        ]);
        return $this->render('index.php', [
            'dataProvider' => $dataProvider,
        ]);
    }
    /*
     * @param integer $id
     * @return mixed
     */
    public function actionCardproduct($id)
    {

        $product = Products::findOne($id);
            return $this->render('CardProduct',['product'=>$product]);
    }
    /*
     * @param integer $id
     * @return mixed
     */
    public  function PresenceStock($count)
    {
        return $this->render(PresenceStock,['count'=>$count]);
    }
}