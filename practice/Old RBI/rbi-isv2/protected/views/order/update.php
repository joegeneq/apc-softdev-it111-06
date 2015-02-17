<?php
/* @var $this OrderController */
/* @var $model Order */

$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Orders List', 'url'=>array('index')),
	array('label'=>'Manage Orders', 'url'=>array('admin')),
	array('label'=>'Create Order', 'url'=>array('create')),
	array('label'=>'View Order', 'url'=>array('view', 'id'=>$model->id)),
	
);
?>

<h1>Update Order <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>