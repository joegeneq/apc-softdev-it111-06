<?php

namespace backend\controllers;

use Yii;
use kartik\mpdf\Pdf;
use yii\filters\AccessControl;
use backend\models\generatedOrder;
use backend\models\generatedOrderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GeneratedOrderController implements the CRUD actions for generatedOrder model.
 */
class GeneratedOrderController extends Controller
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
                        'actions' => ['logout', 'index'],
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
     * Lists all generatedOrder models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new generatedOrderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    $pdf = new Pdf;//or $pdf = new Pdf...
    $pdf->content = $this->render('index', ['searchModel'=>$searchModel, 'dataProvider'=>$dataProvider]);
     return $pdf->render();
    }

    /**
     * Displays a single generatedOrder model.
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
     * Creates a new generatedOrder model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new generatedOrder();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'supplier_id' => $model->supplier_id, 'productinventory_id' => $model->productinventory_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing generatedOrder model.
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
     * Deletes an existing generatedOrder model.
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
     * Finds the generatedOrder model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $supplier_id
     * @param integer $productinventory_id
     * @return generatedOrder the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $supplier_id, $productinventory_id)
    {
        if (($model = generatedOrder::findOne(['id' => $id, 'supplier_id' => $supplier_id, 'productinventory_id' => $productinventory_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
