<?php
/* @var $this ItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Items',
);

$this->menu=array(
	array('label'=>'Create Item', 'url'=>array('create')),
	array('label'=>'Manage Items', 'url'=>array('admin')),
	array('label'=>'Item Stocks List', 'url'=>array('/itemStocks')),
	array('label'=>'Item Prices List', 'url'=>array('/itemPrice')),
	array('label'=>'Item Supplies List', 'url'=>array('/itemQty')),
	
);
?>

<h1>Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
