<?php
/**
 * Created by PhpStorm.
 * User: Uweroy
 * Date: 22.04.2021
 * Time: 23:03
 */

namespace common\widgets;


use yii\base\Widget;

class Rating extends Widget
{

    function run()
    {
        $ret =$this->render('Star');
//        $ret = $ret  +$ret+$ret+$ret+$ret;
        //var_dump($ret);
        return $ret;
    }
}