<?php

namespace app\controllers;

use Yii;
use app\models\productinventory;
use app\models\ProductInventorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductInventoryController implements the CRUD actions for productinventory model.
 */
class ProductInventoryController extends Controller
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
     * Lists all productinventory models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductInventorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single productinventory model.
     * @param integer $ID
     * @param integer $Supplier_ID
     * @return mixed
     */
    public function actionView($ID, $Supplier_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID, $Supplier_ID),
        ]);
    }

    /**
     * Creates a new productinventory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new productinventory();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID, 'Supplier_ID' => $model->Supplier_ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing productinventory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $ID
     * @param integer $Supplier_ID
     * @return mixed
     */
    public function actionUpdate($ID, $Supplier_ID)
    {
        $model = $this->findModel($ID, $Supplier_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID, 'Supplier_ID' => $model->Supplier_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing productinventory model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $ID
     * @param integer $Supplier_ID
     * @return mixed
     */
    public function actionDelete($ID, $Supplier_ID)
    {
        $this->findModel($ID, $Supplier_ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the productinventory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $ID
     * @param integer $Supplier_ID
     * @return productinventory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID, $Supplier_ID)
    {
        if (($model = productinventory::findOne(['ID' => $ID, 'Supplier_ID' => $Supplier_ID])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
