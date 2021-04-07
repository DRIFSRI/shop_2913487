<?php
namespace frontend\controllers;
use yii\web\Controller;

class AjaxController extends Controller
{
    /*
     * @return mixed
     */
    public function actionAdd()
    {
        $id= $_POST['id'];
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
        }
        return json_encode($cd[0]['count']);
    }

    public function actionExchangecountproduct()
    {
        $id= $_POST['id'];
        $count= $_POST['count'];
        if(!empty($cd =(new \yii\db\Query())->select(['*'])->from('baskets_products')->where(['baskets_id'=>4,'products_id'=>$id])->all()))
        {
            \Yii::$app->db->createCommand()->update('baskets_products',['count'=>$count],'baskets_id=4 AND products_id='.$id)->execute();
        }
        else {
            \Yii::$app->db->createCommand()->insert('baskets_products', [
                'count' => $count,
                'products_id' => $id,
                'baskets_id'=>4
            ])->execute();
        }
        return json_encode($count);
    }
    /*
     * @return mixed
     */
    public function actionIndex()
    {
        return $_POST['id'];
    }

    public function actionDeleteproduct()
    {
        $id= $_POST['id'];

        if(!empty($cd =(new \yii\db\Query())->select(['*'])->from('baskets_products')->where(['baskets_id'=>4,'products_id'=>$id])->all()))
        {
            return json_encode(\Yii::$app->db
                ->createCommand()
                ->delete('baskets_products','baskets_id='.'4'.' AND '.'products_id='.$id)
                ->execute());
        }
    }
}