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
    /*
     * @param integer $id
     * @return mixed
     */
    public function  actionSelect($id)
    {
        var_dump($cd =(new \yii\db\Query())->select(['*'])->from('baskets_products')->where(['baskets_id'=>$id])->all());
    }
    /*
     * @param integer $id
     * @return mixed
     */
    public function actionAdd($id)
    {
        if(!empty($cd =(new \yii\db\Query())->select(['*'])->from('baskets_products')->where(['baskets_id'=>4,'products_id'=>$id])->all()))
        {
            \Yii::$app->db->createCommand()->update('baskets_products',['count'=>$cd[0]['count']+1],'baskets_id=4 AND products_id='.$id)->execute();
        }
        else {
            \Yii::$app->db->createCommand()->insert('baskets_products', [
                'count' => 1,
                'products_id' => $id,
                'baskets_id'=>4
            ])->execute();
            //\Yii::$app->db->createC/ommand()->insert('baskets_products',['count'=>3,]);
        }
    }
    /*
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $basket = BasketsProducts::findOne(4);
        $basket->products_id=$id;
        $basket->delete();
    }
}