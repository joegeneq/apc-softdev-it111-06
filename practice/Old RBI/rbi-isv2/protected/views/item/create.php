<?php
/* @var $this ItemController */
/* @var $model Item */

$this->breadcrumbs=array(
	'Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Items List', 'url'=>array('index')),
	array('label'=>'Manage Items', 'url'=>array('admin')),
);
?>

<h1>Create Item</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>