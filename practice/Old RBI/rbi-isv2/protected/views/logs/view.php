<?php
/* @var $this LogsController */
/* @var $model Logs */

$this->breadcrumbs=array(
	'Logs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Logs List', 'url'=>array('index')),
	//array('label'=>'Create Logs', 'url'=>array('create')),
	//array('label'=>'Update Logs', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Logs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Logs', 'url'=>array('admin')),
);
?>

<h1>View Logs #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'log_date_time',
		'log_action',
		'log_module',
		//'user_id',
		array('label'=>'User Name', 'value'=>$model->user->fullname),
	),
)); ?>
