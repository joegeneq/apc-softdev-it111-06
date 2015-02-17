<?php
/* @var $this SaleDetailController */
/* @var $model SaleDetail */

$this->breadcrumbs=array(
'Sales'=>array('/sale'),
	'Sale Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Sale Details List', 'url'=>array('index')),
	array('label'=>'Manage Sale Details', 'url'=>array('admin')),
);
?>

<h1>Create Sale Detail</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>