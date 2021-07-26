<?php

namespace backend\controllers;

use backend\models\Products;
use Yii;
use backend\models\Categories;
use yii\data\ActiveDataProvider;
use yii\db\Exception;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoriesController implements the CRUD actions for Categories model.
 */
class CategoriesController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access'=>[
                'class'=>  AccessControl::class,
                'only'=>['index','create','update','delete','view',],
                'rules'=>[
                    [
                        'allow'=>'true',
                        'actions'=>['index',],
                        'roles'=>['indexCategory']
                    ],
                    [
                        'allow'=>'true',
                        'actions'=>['create',],
                        'roles'=>['createCategory'],
                    ],
                    [
                        'allow'=>'true',
                        'actions'=>['update',],
                        'roles'=>['updateCategory'],
                    ],
                    [
                        'allow'=>'true',
                        'actions'=>['delete',],
                        'roles'=>['deleteCategory'],
                    ],
                    [
                        'allow'=>'true',
                        'actions'=>['view',],
                        'roles'=>['viewCategory'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all Categories models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Categories::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Categories model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Categories model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Categories();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Categories model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Categories model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        if(Products::find()->where(['category_id'=>$id])->one())
        {
            Yii::$app->session->setFlash('danger',"Невозможно удалить категорию, существуют продукты с данной категорией");
            return $this->redirect(['index']);
        }
        if(Categories::find()->where(['parent_id'=>$id])->one())
        {
            Yii::$app->session->setFlash('danger',"Невозможно удалить категорию, существуют подкатегории");
            return $this->redirect(['index']);
        }

        try{
            $this->findModel($id)->delete();
        }
        catch(Exception $er){
            Yii::$app->session->setFlash('danger',"Ошибка при удалении в базе данных, обратитесь к администратору");
        }
        Yii::$app->session->setFlash('success',"Категория удалена");

        return $this->redirect(['index']);
    }

    /**
     * Finds the Categories model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Categories the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Categories::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}