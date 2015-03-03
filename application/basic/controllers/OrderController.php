<?php

namespace app\controllers;

use Yii;
use app\models\Order;
use app\models\OrderSearch;
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
     * @param integer $ID
     * @param integer $Customer_ID
     * @param integer $Product Inventory_ID
     * @return mixed
     */
    public function actionView($ID, $Customer_ID, $Product Inventory_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID, $Customer_ID, $Product Inventory_ID),
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
            return $this->redirect(['view', 'ID' => $model->ID, 'Customer_ID' => $model->Customer_ID, 'Product Inventory_ID' => $model->Product Inventory_ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Order model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $ID
     * @param integer $Customer_ID
     * @param integer $Product Inventory_ID
     * @return mixed
     */
    public function actionUpdate($ID, $Customer_ID, $Product Inventory_ID)
    {
        $model = $this->findModel($ID, $Customer_ID, $Product Inventory_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID, 'Customer_ID' => $model->Customer_ID, 'Product Inventory_ID' => $model->Product Inventory_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Order model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $ID
     * @param integer $Customer_ID
     * @param integer $Product Inventory_ID
     * @return mixed
     */
    public function actionDelete($ID, $Customer_ID, $Product Inventory_ID)
    {
        $this->findModel($ID, $Customer_ID, $Product Inventory_ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Order model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $ID
     * @param integer $Customer_ID
     * @param integer $Product Inventory_ID
     * @return Order the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID, $Customer_ID, $Product Inventory_ID)
    {
        if (($model = Order::findOne(['ID' => $ID, 'Customer_ID' => $Customer_ID, 'Product Inventory_ID' => $Product Inventory_ID])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
