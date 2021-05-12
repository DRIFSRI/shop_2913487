public function actionGeneratedhtml_top()
{
if (!isset($_COOKIE['basket_id']) || !(int)$_COOKIE['basket_id'])  {
exit('Да пошел ты');
}
$basket_id = $_COOKIE['basket_id'];

$request = \Yii::$app->request;
//echo '$request<pre>'; var_dump($request); echo "</pre>\n<br>";

$id = $request->post('id', 0);
$count = $request->post('count', null);

$query = \app\models\BasketsProducts::find()->where(['baskets_id'=>$basket_id])->with('products');
//        $query = \app\models\Products::find();
//        echo '<pre>';        var_dump($query->one());        echo "</pre>\n<br>";

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