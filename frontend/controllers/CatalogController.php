<?php
/**
 * Created by PhpStorm.
 * User: Uweroy
 * Date: 05.03.2021
 * Time: 19:18
 */
namespace frontend\controllers;
use app\models\Products;
use app\models\Categories;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\web\Controller;

//Контролер Католога
class CatalogController extends Controller
{
    /*
     * Отображение Каталога
     * @return mixed
     */
    public function actionIndex()
    {
        $query = Products::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 4 ,
            ],
        ]);

        return $this->render('index.php', [
            'dataProvider' => $dataProvider,
            'breadcrumbs'=>[
                ['label' => 'Католог', 'url' => ['/catalog']],
            ],
            'title'=>'Каталог',
        ]);
    }
    /*
     * @param integer $id
     * @return mixed
     */
    public function actionCardproduct($id)
    {

        $product = Products::findOne($id);
            return $this->render('CardProduct',['product'=>$product]);
    }
    /*
     * @param integer $id
     * @return mixed
     */
    public function actionGroup($id=NULL){
        if($id === NULL){
            return 1;
        }
        $query = \app\models\Categories::getProductsByGroup($id);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 4 ,
            ],
        ]);
        $model = Categories::find()->where(['id'=>$id])->one();
        return $this->render('index.php', [
            'dataProvider' => $dataProvider,
            'breadcrusmbs'=>[
                ['label' => 'Католог', 'url' => ['/catalog']],
                ['label' => 'Категории', 'url' => ['group']],
                ['label' => $model->name, 'url' => $model['id']],
            ],
            'title'=>'Категория:'.$model->name,

        ]);
    }

    /*
     * @param integer $id
     * @return mixed
     */
    public  function PresenceStock($count)
    {
        return $this->render(PresenceStock,['count'=>$count]);
    }
}