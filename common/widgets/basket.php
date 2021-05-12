
<?php
/**
 * Created by PhpStorm.
 * User: Uweroy
 * Date: 05.03.2021
 * Time: 20:28
 */

namespace common\widgets;


use app\models\Baskets;
use yii\base\Widget;

class basket extends Widget
{
    public $user_id;
    //Инициация
    function init($user_id)
    {
        $this->user_id=$user_id;
    }
    /*
     * @return string
     */
    function  Exchangecountproduct($d)
    {
//        if(!empty($cd =(new \yii\db\Query())->select(['*'])->from('baskets_products')->where(['baskets_id'=>4,'products_id'=>$id])->all()))
//        {
//            \Yii::$app->db->createCommand()->update('baskets_products',['count'=>$count],'baskets_id=4 AND products_id='.$id)->execute();
//        }
//        else {
//            \Yii::$app->db->createCommand()->insert('baskets_products', [
//                'count' => $count,
//                'products_id' => $id,
//                'baskets_id'=>4
//            ])->execute();
//        }
//        return json_encode($count);
    }
    /*
     * @return string
     */
    public function run()
    {
        $basket = Baskets::findOne($this->user_id);
        return $this->render("basket",['basket'=>$basket]);
    }
}