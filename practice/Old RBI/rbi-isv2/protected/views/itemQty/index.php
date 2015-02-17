<?php
/* @var $this ItemQtyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
'Item'=>array('/item'),
	'Item Supplies',
);

$this->menu=array(
	array('label'=>'Add Item Supply', 'url'=>array('create')),
	array('label'=>'Manage Item Supplies', 'url'=>array('admin')),
);
?>

<h1>Item Supplies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
