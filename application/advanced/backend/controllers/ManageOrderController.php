<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use backend\models\manageOrder;
use backend\models\manageOrderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ManageOrderController implements the CRUD actions for manageOrder model.
 */
class ManageOrderController extends Controller
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
     * Lists all manageOrder models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new manageOrderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single manageOrder model.
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
     * Creates a new manageOrder model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new manageOrder();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'supplier_id' => $model->supplier_id, 'productinventory_id' => $model->productinventory_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing manageOrder model.
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
     * Deletes an existing manageOrder model.
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
     * Finds the manageOrder model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $supplier_id
     * @param integer $productinventory_id
     * @return manageOrder the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $supplier_id, $productinventory_id)
    {
        if (($model = manageOrder::findOne(['id' => $id, 'supplier_id' => $supplier_id, 'productinventory_id' => $productinventory_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
