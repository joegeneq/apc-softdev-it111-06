<?php
/* @var $this ItemStocksController */
/* @var $model ItemStocks */

$this->breadcrumbs=array(
'Items'=>array('/item'),
	'Item Stocks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Item Stocks List', 'url'=>array('index')),
	array('label'=>'Manage Item Stocks', 'url'=>array('admin')),
);
?>

<h1>Create ItemStocks</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>