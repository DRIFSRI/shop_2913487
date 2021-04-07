<?php
/**
 * Created by PhpStorm.
 * User: Uweroy
 * Date: 05.03.2021
 * Time: 19:18
 */
namespace frontend\controllers;
use app\models\Products;
use yii\data\Pagination;
use yii\web\Controller;
class CatalogController extends Controller
{
    /*
     * @return mixed
     */
    public function actionIndex()
    {
        $query = Products::find();
        $pagination = new Pagination([
            'defaultPageSize' => 6,
            'totalCount' => $query->count(),
        ]);
        $products = $query->limit($pagination->limit)->offset($pagination->offset)->all();

        return $this->render('index.php', [
            'products' => $products,
            'pagination' => $pagination,
        ]);
    }

    /*
     * @param integer $id
     * @return mixed
     */
    public function actionCardProduct($id)
    {
        $product = Products::findOne($id);
            return $this->render('CardProduct',['product'=>$product]);
    }
}