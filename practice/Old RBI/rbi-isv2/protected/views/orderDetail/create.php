<?php
/* @var $this OrderDetailController */
/* @var $model OrderDetail */

$this->breadcrumbs=array(
'Orders'=>array('/order'),
	'Order Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Order Details List', 'url'=>array('index')),
	array('label'=>'Manage Order Details', 'url'=>array('admin')),
);
?>

<h1>Create OrderDetail</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>