<?php

namespace app\controllers;

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
     * @param integer $ID
     * @param integer $Customer_ID
     * @return mixed
     */
    public function actionView($ID, $Customer_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($ID, $Customer_ID),
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
            return $this->redirect(['view', 'ID' => $model->ID, 'Customer_ID' => $model->Customer_ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Customercontact model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $ID
     * @param integer $Customer_ID
     * @return mixed
     */
    public function actionUpdate($ID, $Customer_ID)
    {
        $model = $this->findModel($ID, $Customer_ID);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ID' => $model->ID, 'Customer_ID' => $model->Customer_ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Customercontact model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $ID
     * @param integer $Customer_ID
     * @return mixed
     */
    public function actionDelete($ID, $Customer_ID)
    {
        $this->findModel($ID, $Customer_ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Customercontact model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $ID
     * @param integer $Customer_ID
     * @return Customercontact the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ID, $Customer_ID)
    {
        if (($model = Customercontact::findOne(['ID' => $ID, 'Customer_ID' => $Customer_ID])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
