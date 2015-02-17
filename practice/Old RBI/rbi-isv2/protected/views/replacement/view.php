<?php
/* @var $this ReplacementController */
/* @var $model Replacement */

$this->breadcrumbs=array(
	'Replacements'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Replacements List', 'url'=>array('index')),
	array('label'=>'Manage Replacements', 'url'=>array('admin')),
	array('label'=>'Create Replacement', 'url'=>array('create')),
	array('label'=>'Update Replacement', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Replacement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	
	array('label'=>'Add Item in Replacement', 'url'=>array('/replacementDetail/create','replacement_id'=>$model->id)),
);
?>

<h1>View Replacement #<?php echo $model->id; ?></h1><hr>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'replacement_date',
		array('label'=>'Customer Name', 'value'=>$model->customer->getFullname()),
		array('label'=>'Sale Official Receipt No.', 'value'=>$model->sale->sale_officialreceipt_no),
	),
)); ?>
