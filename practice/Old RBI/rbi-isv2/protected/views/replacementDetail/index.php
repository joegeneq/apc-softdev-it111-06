<?php
/* @var $this ReplacementDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Replacements'=>array('/replacement'),
	'Replacement Details',
);

$this->menu=array(
	//array('label'=>'Create ReplacementDetail', 'url'=>array('create')),
	array('label'=>'Manage Replacement Details', 'url'=>array('admin')),
);
?>

<h1>Replacement Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
