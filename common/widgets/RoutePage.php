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
        ['label' => 'Корзина', 'url' => ['/basket/index']],
        ['label' => 'Католог', 'url' => ['/catalog/index']],
        ['label' => 'Оплата', 'url' => ['/payment/index']],
        ['label' => 'Самовывоз', 'url' => ['/delivery/index']],
        ['label' => 'Гарантия', 'url' => ['/guarantee/index']],
        ['label' => 'Контакты', 'url' => ['/contacts/index']],
//        ['label' => 'Login', 'url' => ['/site/login/index']],
//        ['label' => 'Signup', 'url' => ['/site/signup/index']],
    ];
    public function run()
    {
        return $this->render('RoutePage',['route'=>$this->route]);
    }

}