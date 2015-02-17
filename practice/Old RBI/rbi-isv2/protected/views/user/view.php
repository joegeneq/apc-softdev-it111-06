<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Users List', 'url'=>array('index')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<h1>View User #<?php echo $model->id; ?></h1><hr>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'fullname',
	),
)); ?>


<br><br>
<h1>Logs</h1>
<hr>

<?php $customerid= 1;?>
<?php $en=Logs::model()->findAll('user_id = :a', array(':a'=>$model->id));?>
<?php if (count($en) !== 0){?>
<?php foreach ($en as $row) { ?>
<h4>Log # <?php echo $customerid; $customerid++;?></h4><br>
<?php $this->widget ('zii.widgets.CdetailView', array(
	'data'=>$row,
	'attributes'=>array(
	//	'id',
		'log_date_time',
		'log_action',
		'log_module',
	//	'user_id',
	),
));
?><br>

<?php }} ?>