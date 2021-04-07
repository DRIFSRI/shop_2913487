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
    public function run()
    {
        $basket = Baskets::findOne($this->user_id);
        return $this->render("basket",['basket'=>$basket]);
    }
}