<?php
/* @var $this ItemPriceController */
/* @var $model ItemPrice */

$this->breadcrumbs=array(
'Items'=>array('/item'),
	'Item Prices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ItemPrice', 'url'=>array('index')),
	array('label'=>'Manage ItemPrice', 'url'=>array('admin')),
);
?>

<h1>Create ItemPrice</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>