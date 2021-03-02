<?php
namespace frontend\controllers;

use Yii;
use app\models\Product;
use app\models\ParametrProduct;
use app\models\Parametr;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\data\Pagination;

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
        $query = Product::find();

        $pagination = new Pagination([
            'defaultPageSize' => 6,
            'totalCount' => $query->count(),
        ]);



        $products = Product::find()->limit($pagination->limit)->offset($pagination->offset)->all();

        return $this->render('ActiveRecord', [
            'products' => $products,
            'pagination' => $pagination,
        ]);
    }

    public function actionSearch($id)
    {
//        $product=Product::find()->where('id=1')->all();
        $product = Product::findOne($id);

//        var_dump($product);
        return $this->render('ProductView',['product'=>$product]);
    }

    private function ActiveRecord()
    {
        $products = Product::find()->limit($pagination->limit)->offset($pagination->offset)->all();

        return $this->render('ActiveRecord', [
            'products' => $products,
            'pagination' => $pagination,
        ]);
    }

    private function dao()
    {
        //dao
//        $subQuery = (new Query())->select('COUNT(*)')->from('parametr');
//        $query = (new Query)->select(['id', 'count' => $subQuery])->from('product');


        $products = (new \yii\db\Query())
            ->select(['product.name', 'product.price', 'parametr.value'])
            ->leftJoin('parametr_product', 'parametr_product.product_id=id')
            ->leftJoin('parametr', 'parametr_product.parametr_id=parametr.id')
            ->from('product')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->orderBy('name')
            ->all();

        return $this->render('index', [
            'products' => $products,
            'pagination' => $pagination,
        ]);
    }

}