<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use backend\models\Order;
use backend\models\OrderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrderController implements the CRUD actions for Order model.
 */
class OrderController extends Controller
{
    public function behaviors()
    {
        return [
        'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'view', 'create', 'update'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Order models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Order model.
     * @param integer $id
     * @param integer $supplier_id
     * @param integer $productinventory_id
     * @return mixed
     */
    public function actionView($id, $supplier_id, $productinventory_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $supplier_id, $productinventory_id),
        ]);
    }

    /**
     * Creates a new Order model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Order();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'supplier_id' => $model->supplier_id, 'productinventory_id' => $model->productinventory_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Order model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $supplier_id
     * @param integer $productinventory_id
     * @return mixed
     */
    public function actionUpdate($id, $supplier_id, $productinventory_id)
    {
        $model = $this->findModel($id, $supplier_id, $productinventory_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'supplier_id' => $model->supplier_id, 'productinventory_id' => $model->productinventory_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Order model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $supplier_id
     * @param integer $productinventory_id
     * @return mixed
     */
    public function actionDelete($id, $supplier_id, $productinventory_id)
    {
        $this->findModel($id, $supplier_id, $productinventory_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Order model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $supplier_id
     * @param integer $productinventory_id
     * @return Order the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $supplier_id, $productinventory_id)
    {
        if (($model = Order::findOne(['id' => $id, 'supplier_id' => $supplier_id, 'productinventory_id' => $productinventory_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
