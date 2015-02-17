<?php
/* @var $this LogsController */
/* @var $model Logs */

$this->breadcrumbs=array(
	'Logs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Logs List', 'url'=>array('index')),
	array('label'=>'Manage Logs', 'url'=>array('admin')),
	//array('label'=>'Create Logs', 'url'=>array('create')),
	array('label'=>'View Log', 'url'=>array('view', 'id'=>$model->id)),
	
);
?>

<h1>Update Logs <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>