<?php
/**
 * Created by PhpStorm.
 * User: Uweroy
 * Date: 06.04.2021
 * Time: 13:21
 */

namespace common\widgets;

use yii\base\Widget;

class RoutePage extends Widget
{
    var $route;
    public static $menuItems = [
    /*['label' => 'Home', 'url' => ['/site/index']],*/
    /*['label' => 'About', 'url' => ['/site/about']],*/
    /*['label' => 'Contact', 'url' => ['/site/contact']],*/
['label' => 'Корзина', 'url' => ['/basket']],
['label' => 'Католог', 'url' => ['/catalog']],
];
    public function run()
    {
        return $this->render('RoutePage',['route'=>$this->route]);
    }

}