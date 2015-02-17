<?php
/* @var $this ItemQtyController */
/* @var $model ItemQty */

$this->breadcrumbs=array(
'Items'=>array('/item'),
	'Item Supplies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Item Supplies List', 'url'=>array('index')),
	array('label'=>'Manage Item Supplies', 'url'=>array('admin')),
);
?>

<h1>Create Item Supply</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>