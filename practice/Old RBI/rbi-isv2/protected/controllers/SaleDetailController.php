<?php

class SaleDetailController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('?'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new SaleDetail;
		$model->sale_id = Yii::app()->getRequest()->getParam('sale_id');
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SaleDetail']))
		{
			$model->attributes=$_POST['SaleDetail'];
			$model->sale_price= $model->sale_quantity * $model->item->item_price;
			
			if($model->save()){
					$old = new Logs;
					
					$old->log_date_time=date('Y-m-d H:i:s');
					$old->log_action="Created new sale detail: Sale Detail #" .
					$model->id . ", " . $model->sale->sale_officialreceipt_no;
					$old->log_module="Sale Detail";
					$old->user_id= Yii::app()->user->id;
					
					$qty =Yii::app()->db->createCommand("SELECT `sale_quantity` AS `p` FROM `sale_detail`  ORDER BY `id` DESC LIMIT 1")->queryAll();

					if(isset($qty[0]['p'])){
					$hehe =($qty[0]['p']);
					$sql1 = "UPDATE  `rbi-is`.`item` SET  `item_qoh` =  `item_qoh` - '$hehe' WHERE  `item`.`id` = '$model->item_id'";
					$dataReader =  Yii::app()->db->createCommand($sql1)->query();
				}
				//$this->redirect(array('view','id'=>$model->id));
				if($old->save()) $this->redirect(array('view','id'=>$model->id));
		}

}		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['SaleDetail']))
		{
			$model->attributes=$_POST['SaleDetail'];
			if($model->save())
			$old = new Logs;
			$old->log_date_time=date('Y-m-d H:i:s');
			$old->log_action="Updated sale detail #" . $model->id . ", " . $model->saleDetail->sale->sale_officialreceipt_no .".";
			$old->log_module="Sale Detail";
			$old->user_id= Yii::app()->user->id;
			
			if($old->save())
				$this->redirect(array('view','id'=>$model->id));
		}

				//$this->redirect(array('view','id'=>$model->id));
		//}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		
		$model=$this->loadModel($id);
		$old = new Logs;
		$old->log_date_time=date('Y-m-d H:i:s');
		$old->log_action="Deleted the sale detail, " . $model->sale->sale_officialreceipt_no . ".";
		$old->log_module="Sale Detail";
		$old->user_id= Yii::app()->user->id;
		$old->save();
		
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('SaleDetail');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new SaleDetail('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['SaleDetail']))
			$model->attributes=$_GET['SaleDetail'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return SaleDetail the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=SaleDetail::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param SaleDetail $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='sale-detail-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
