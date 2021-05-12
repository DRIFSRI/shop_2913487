<?php
namespace frontend\controllers;
use yii\web\Controller;
class AjaxController extends Controller
{
    public function actionAdd()
    {
        $id= $_POST['id'];
        $basket_id = $this->actionCheck($_COOKIE,'basket_id');

        if(!empty($cd =(new \yii\db\Query())->select(['*'])->from('baskets_products')->where(['baskets_id'=>$basket_id,'products_id'=>$id])->all()))
        {
            \Yii::$app->db->createCommand()->update('baskets_products',['count'=>$cd[0]['count']+1],'baskets_id='.$basket_id.' AND products_id='.$id)->execute();
        }
        else {
            \Yii::$app->db->createCommand()->insert('baskets_products', [
                'count' => 1,
                'products_id' => $id,
                'baskets_id'=>$basket_id,
            ])->execute();
        }

//        var_dump(!empty($cd));
        return json_encode($cd[0]['count']);
    }

    public function actionCheck($ob,$dd)
    {
        if (!isset($_COOKIE['basket_id']) || !(int)$_COOKIE['basket_id'])  {
            exit('Да пошел ты');
        }
        return $ob[$dd];
    }

    /*
     * Изменение количества продуктов
     * @return mixed
     */
    public function actionExchangecountproduct()
    {
        $request = \Yii::$app->request;

        $id = $request->post('id', 0);
        $count = $request->post('count', null);
        $basket_id = $this->actionCheck($_COOKIE,'basket_id');

        if(!empty($cd =(new \yii\db\Query())->select(['*'])->from('baskets_products')->where(['baskets_id'=>$basket_id,'products_id'=>$id])->all()))
        {
            \Yii::$app->db->createCommand()->update('baskets_products',['count'=>$count],'baskets_id='.$basket_id.' AND products_id='.$id)->execute();
        }
        else {
            \Yii::$app->db->createCommand()->insert('baskets_products', [
                'count' => $count,
                'products_id' => $id,
                'baskets_id'=>$basket_id,
            ])->execute();
        }

        return $this->renderFile('@app/views/basket/_list.php',['basket_id'=>$basket_id]);
    }
    /*
     * @return mixed
     */
    public function actionGeneratedhtml_top()
    {
        if (!isset($_COOKIE['basket_id']) || !(int)$_COOKIE['basket_id'])  {
            exit('Да пошел ты');
        }
        $basket_id = $_COOKIE['basket_id'];

        $request = \Yii::$app->request;

        $id = $request->post('id', 0);
        $count = $request->post('count', null);

        $query = \app\models\BasketsProducts::find()->where(['baskets_id'=>$basket_id])->with('products');
//        $query = \app\models\Products::find();

        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' =>($query),
            'pagination' => [
                'pageSize' => 5 ,
            ],
        ]);
        $list = \yii\widgets\ListView::widget([
            'dataProvider'=>$dataProvider,
            'itemView'=>'/basket/_list',
            'itemOptions'=>['class'=>'product'],
            'options'=>['class'=>'basket_list'],
            'summary'=>'',
        ]);
        return $list;
    }

    /*
     * Удаление продукта
     * $return mixed
     */
    public function actionDeleteproduct()
    {
        $id= $_POST['id'];
        $basket_id = $this->actionCheck($_COOKIE,'basket_id');

        if(!empty($cd =(new \yii\db\Query())->select(['*'])->from('baskets_products')->where(['baskets_id'=>$basket_id,'products_id'=>$id])->all()))
        {
            return json_encode(\Yii::$app->db
                ->createCommand()
                ->delete('baskets_products','baskets_id='.$basket_id.' AND '.'products_id='.$id)
                ->execute());
        }
    }
}