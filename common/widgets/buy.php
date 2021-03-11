<?php
/**
 * Created by PhpStorm.
 * User: Uweroy
 * Date: 09.03.2021
 * Time: 18:49
 */

namespace common\widgets;


use yii\base\Widget;

class buy extends Widget
{
    public function init()
    {
    }
    /**
     *
     * @return string
     */
    public function run()
    {
        return $this->render("buy",[]);
    }
}