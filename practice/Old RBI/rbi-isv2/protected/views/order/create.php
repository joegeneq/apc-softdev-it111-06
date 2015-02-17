<?php
/* @var $this OrderController */
/* @var $model Order */

$this->breadcrumbs=array(
	'Orders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Orders List', 'url'=>array('index')),
	array('label'=>'Manage Orders', 'url'=>array('admin')),
);
?>

<h1>Create Order</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>