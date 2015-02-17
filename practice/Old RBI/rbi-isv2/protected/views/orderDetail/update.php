<?php
/* @var $this OrderDetailController */
/* @var $model OrderDetail */

$this->breadcrumbs=array(
'Orders'=>array('/order'),
	'Order Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Order Details List', 'url'=>array('index')),
	array('label'=>'Manage Order Details', 'url'=>array('admin')),
	array('label'=>'View Order Detail', 'url'=>array('view', 'id'=>$model->id)),
	
);
?>

<h1>Update OrderDetail <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>