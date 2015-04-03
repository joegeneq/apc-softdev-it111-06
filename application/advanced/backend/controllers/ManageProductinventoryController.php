<?php

namespace backend\controllers;

use Yii;
use backend\models\manageProductinventory;
use backend\models\manageProductinventorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ManageProductinventoryController implements the CRUD actions for manageProductinventory model.
 */
class ManageProductinventoryController extends Controller
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
     * Lists all manageProductinventory models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new manageProductinventorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single manageProductinventory model.
     * @param integer $id
     * @param integer $supplier_id
     * @return mixed
     */
    public function actionView($id, $supplier_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $supplier_id),
        ]);
    }

    /**
     * Creates a new manageProductinventory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new manageProductinventory();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'supplier_id' => $model->supplier_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing manageProductinventory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $supplier_id
     * @return mixed
     */
    public function actionUpdate($id, $supplier_id)
    {
        $model = $this->findModel($id, $supplier_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'supplier_id' => $model->supplier_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing manageProductinventory model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $supplier_id
     * @return mixed
     */
    public function actionDelete($id, $supplier_id)
    {
        $this->findModel($id, $supplier_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the manageProductinventory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $supplier_id
     * @return manageProductinventory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $supplier_id)
    {
        if (($model = manageProductinventory::findOne(['id' => $id, 'supplier_id' => $supplier_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
