<?php
/* @var $this ItemQtyController */
/* @var $model ItemQty */

$this->breadcrumbs=array(
'Items'=>array('/item'),
	'Item Supplies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Item Supplies List', 'url'=>array('index')),
	array('label'=>'Add Item Supply', 'url'=>array('create')),
	//array('label'=>'Update Item Supply', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Item Supply', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Item Supplies', 'url'=>array('admin')),
);
?>

<h1>View Item Supply #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array('label'=>'Item Description', 'type'=>'html', 'value'=>CHtml::link(CHtml::encode($model->item->item_description), array('/item/view','id'=>$model->item_id))),
		'item_qty_date',
		'item_qty_new',
	),
)); ?>

<?php



?>