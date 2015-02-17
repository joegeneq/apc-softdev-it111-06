<?php
/* @var $this OrderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orders',
);

$this->menu=array(
	array('label'=>'Create Order', 'url'=>array('create')),
	array('label'=>'Manage Orders', 'url'=>array('admin')),
	array('label'=>'Order Details List', 'url'=>array('/orderDetail')),
);
?>

<h1>Orders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
