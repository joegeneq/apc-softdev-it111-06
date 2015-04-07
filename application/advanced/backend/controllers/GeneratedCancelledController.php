<?php

namespace backend\controllers;

use Yii;
use kartik\mpdf\Pdf;
use yii\filters\AccessControl;
use backend\models\generatedCancelled;
use backend\models\generatedCancelledSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GeneratedCancelledController implements the CRUD actions for generatedCancelled model.
 */
class GeneratedCancelledController extends Controller
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
     * Lists all generatedCancelled models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new generatedCancelledSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

         $pdf = new Pdf;//or $pdf = new Pdf...
    $pdf->content = $this->render('index', ['searchModel'=>$searchModel, 'dataProvider'=>$dataProvider]);
     return $pdf->render();
    }

    /**
     * Displays a single generatedCancelled model.
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
     * Creates a new generatedCancelled model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new generatedCancelled();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'productinventory_id' => $model->productinventory_id, 'customer_id' => $model->customer_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing generatedCancelled model.
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
     * Deletes an existing generatedCancelled model.
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
     * Finds the generatedCancelled model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $productinventory_id
     * @param integer $customer_id
     * @return generatedCancelled the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $productinventory_id, $customer_id)
    {
        if (($model = generatedCancelled::findOne(['id' => $id, 'productinventory_id' => $productinventory_id, 'customer_id' => $customer_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
