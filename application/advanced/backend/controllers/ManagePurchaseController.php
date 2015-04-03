<?php

namespace backend\controllers;

use Yii;
use backend\models\managePurchase;
use backend\models\managePurchaseSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ManagePurchaseController implements the CRUD actions for managePurchase model.
 */
class ManagePurchaseController extends Controller
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
     * Lists all managePurchase models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new managePurchaseSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single managePurchase model.
     * @param integer $id
     * @param integer $productinventory_id
     * @param integer $customer_id
     * @return mixed
     */
    public function actionView($id, $productinventory_id, $customer_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $productinventory_id, $customer_id),
        ]);
    }

    /**
     * Creates a new managePurchase model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new managePurchase();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'productinventory_id' => $model->productinventory_id, 'customer_id' => $model->customer_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing managePurchase model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $productinventory_id
     * @param integer $customer_id
     * @return mixed
     */
    public function actionUpdate($id, $productinventory_id, $customer_id)
    {
        $model = $this->findModel($id, $productinventory_id, $customer_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'productinventory_id' => $model->productinventory_id, 'customer_id' => $model->customer_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing managePurchase model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $productinventory_id
     * @param integer $customer_id
     * @return mixed
     */
    public function actionDelete($id, $productinventory_id, $customer_id)
    {
        $this->findModel($id, $productinventory_id, $customer_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the managePurchase model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $productinventory_id
     * @param integer $customer_id
     * @return managePurchase the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $productinventory_id, $customer_id)
    {
        if (($model = managePurchase::findOne(['id' => $id, 'productinventory_id' => $productinventory_id, 'customer_id' => $customer_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
