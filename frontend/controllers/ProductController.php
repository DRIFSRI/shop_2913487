<?php

namespace frontend\controllers;

use app\models\Products;
use Yii;
use app\models\Product;
use app\models\ParametrProduct;
use app\models\Parametr;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\data\Pagination;

//Контролер продукта
class ProductController extends Controller
{
    //Pattern PATTERN = Pattern.compile("[A-Za-z
    //
    //.%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{3,4}");
    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $query = Products::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $products = Products::find()->limit($pagination->limit)->offset($pagination->offset)->all();

        $dataProvider = new yii\data\ActiveDataProvider([
            'query' => \app\models\Products::find(),
        ]);


        return $this->render('ActiveRecord', [
            'products' => $products,
            'pagination' => $pagination,
        ]);
    }

    /*
     * @return mixed
     */
    private function ActiveRecord()
    {
        $products = Products::find()->limit($pagination->limit)->offset($pagination->offset)->all();

        return $this->render('ActiveRecord', [
            'products' => $products,
            'pagination' => $pagination,
        ]);
    }

    private function dao()
    {
        $pagination = new Pagination([
            'defaultPageSize' => 6,
        ]);
        $products = (new \yii\db\Query())
            ->select(['product.name', 'product.price', 'parametr.value'])
            ->leftJoin('parametr_product', 'parametr_product.product_id=id')
            ->leftJoin('parametr', 'parametr_product.parametr_id=parametr.id')
            ->from('product')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->orderBy('name');
//            ->all();
        $pagination->totalCount =$products->count();
        return $this->render('index', [
            'products' => $products->all(),
            'pagination' => $pagination,
        ]);
    }

}