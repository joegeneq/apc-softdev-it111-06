<?php
/* @var $this SaleDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
'Sales'=>array('/sale'),
	'Sale Details',
);

$this->menu=array(
	//array('label'=>'Create SaleDetail', 'url'=>array('create')),
	array('label'=>'Manage Sale Details', 'url'=>array('admin')),
);
?>

<h1>Sale Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
