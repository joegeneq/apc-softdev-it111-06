<?php
/* @var $this ItemStocksController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Item'=>array('/item'),
	'Item Stocks',
);

$this->menu=array(
	array('label'=>'Add Item Stock', 'url'=>array('create')),
	array('label'=>'Manage Item Stocks', 'url'=>array('admin')),
);
?>

<h1>Item Stocks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
