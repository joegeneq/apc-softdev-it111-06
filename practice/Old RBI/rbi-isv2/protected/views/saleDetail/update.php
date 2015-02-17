<?php
/* @var $this SaleDetailController */
/* @var $model SaleDetail */

$this->breadcrumbs=array(
'Sales'=>array('/sale'),
	'Sale Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Sale Details List', 'url'=>array('index')),
	array('label'=>'Manage Sale Details', 'url'=>array('admin')),
	//array('label'=>'Create SaleDetail', 'url'=>array('create')),
	array('label'=>'View Sale Detail', 'url'=>array('view', 'id'=>$model->id)),
	
);
?>

<h1>Update Sale Detail <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>