<?php

namespace backend\controllers;

use Yii;
use app\models\Customercontact;
use app\models\CustomercontactSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CustomercontactController implements the CRUD actions for Customercontact model.
 */
class CustomercontactController extends Controller
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
     * Lists all Customercontact models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CustomercontactSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Customercontact model.
     * @param integer $id
     * @param integer $customer_id
     * @return mixed
     */
    public function actionView($id, $customer_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $customer_id),
        ]);
    }

    /**
     * Creates a new Customercontact model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Customercontact();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'customer_id' => $model->customer_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Customercontact model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $customer_id
     * @return mixed
     */
    public function actionUpdate($id, $customer_id)
    {
        $model = $this->findModel($id, $customer_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'customer_id' => $model->customer_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Customercontact model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $customer_id
     * @return mixed
     */
    public function actionDelete($id, $customer_id)
    {
        $this->findModel($id, $customer_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Customercontact model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $customer_id
     * @return Customercontact the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $customer_id)
    {
        if (($model = Customercontact::findOne(['id' => $id, 'customer_id' => $customer_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
