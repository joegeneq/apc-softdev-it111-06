<?php

class OrderController extends Controller
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
		$model=new Order;
		$model->customer_id = Yii::app()->getRequest()->getParam('customer_id');
		$old = new Logs;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Order']))
		{
			$model->attributes=$_POST['Order'];
			
			
			
			if($model->save()) {
			
			$old->log_date_time=date('Y-m-d H:i:s');
			$old->log_action="Created new order: Order #" . $model->id . " for customer, " . $model->customer->cus_firstname . " " . $model->customer->cus_lastname .".";
			$old->log_module="Order";
			$old->user_id= Yii::app()->user->id;
			
			if($old->save()) $this->redirect(array('orderDetail/create','order_id'=>$model->id));
				
			}	
		}

		$this->render('create',array(
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

		if(isset($_POST['Order']))
		{
			$model->attributes=$_POST['Order'];
			
			
		if($model->save()) 
			{
			
				
			$old = new Logs;
			$old->log_date_time=date('Y-m-d H:i:s');
			$old->log_action="Updated " . $model->customer->cus_firstname . " " . $model->customer->cus_lastname . "'s order, Order #" . $model->id ."." ;
			$old->log_module="Order";
			$old->user_id= Yii::app()->user->id;
			$old->save(); 
			
				
			if ($model->order_status == 'Confirmed')
			{
				$seyl = new Sale;
				$seyl->sale_date=date('Y-m-d H:i:s');
				$seyl->sale_officialreceipt_no='Insert receipt number here.';
				$seyl->customer_id= $model->customer_id;
				if(isset($_POST['Sale']))
				{
					$seyl->attributes=$_POST['Sale'];
				}
				
				if ($seyl->save()) {
					
					$en = OrderDetail::model()->findAll('order_id =:a' , array(':a'=>$model->id));
						
						count($en) !== 0;
							
								foreach ($en as $row)
									{
										$odtl = new SaleDetail;
										$odtl->sale_id = $seyl->id;
										$odtl->item_id = $row->item_id;
										$odtl->sale_quantity = $row->order_detail_qty;
										
										
												$odtl->sale_price = $row->order_detail_qty * $row->item->item_price;
											
										
										$odtl->save();
										
										$qty =Yii::app()->db->createCommand("SELECT `sale_quantity` AS `p` FROM `sale_detail`  ORDER BY `id` DESC LIMIT 1")->queryAll();

											if(isset($qty[0]['p'])){
											$hehe =($qty[0]['p']);
											$sql1 = "UPDATE  `rbi-is`.`item` SET  `item_qoh` =  `item_qoh` - '$hehe' WHERE  `item`.`id` = '$odtl->item_id'";
											$dataReader =  Yii::app()->db->createCommand($sql1)->query();
				}
									}
							
							
					
					$this->redirect(array('sale/update', 'id'=>$seyl->id));
				}
			}
			
			 if ($model->order_status == 'Cancelled')
			 {
				$this->redirect(array('order/view', 'id'=>$model->id));
			 }
			 
			 if ($model->order_status == 'Pending')
			 {
				$this->redirect(array('order/view', 'id'=>$model->id));
			 }
			 
			}
			
			
			
			
			
		}

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
			$old->log_action="Deleted " . $model->customer->cus_firstname . " " . $model->customer->cus_lastname . "'s order, Order #" . $model->id ."." ;
			$old->log_module="Order";
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
		$dataProvider=new CActiveDataProvider('Order');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Order('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Order']))
			$model->attributes=$_GET['Order'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Order the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Order::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Order $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='order-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
