<?php
/* @var $this ItemPriceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
'Item'=>array('/item'),
	'Item Prices',
);

$this->menu=array(
	array('label'=>'Create Item Price', 'url'=>array('create')),
	array('label'=>'Manage Item Price', 'url'=>array('admin')),
);
?>

<h1>Item Prices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
