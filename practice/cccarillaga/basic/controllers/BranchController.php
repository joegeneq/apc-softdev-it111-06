<?php

namespace app\controllers;

use Yii;
use app\models\Branch;
use app\models\BranchSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BranchController implements the CRUD actions for Branch model.
 */
class BranchController extends Controller
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
     * Lists all Branch models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BranchSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Branch model.
     * @param integer $id
     * @param integer $Company_id
     * @return mixed
     */
    public function actionView($id, $Company_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $Company_id),
        ]);
    }

    /**
     * Creates a new Branch model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Branch();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'Company_id' => $model->Company_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Branch model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $Company_id
     * @return mixed
     */
    public function actionUpdate($id, $Company_id)
    {
        $model = $this->findModel($id, $Company_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'Company_id' => $model->Company_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Branch model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $Company_id
     * @return mixed
     */
    public function actionDelete($id, $Company_id)
    {
        $this->findModel($id, $Company_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Branch model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $Company_id
     * @return Branch the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $Company_id)
    {
        if (($model = Branch::findOne(['id' => $id, 'Company_id' => $Company_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
