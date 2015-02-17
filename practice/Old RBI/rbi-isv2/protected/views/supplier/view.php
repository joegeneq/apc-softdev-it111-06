<?php
/* @var $this SupplierController */
/* @var $model Supplier */

$this->breadcrumbs=array(
	'Suppliers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Supplier', 'url'=>array('index')),
	array('label'=>'Create Supplier', 'url'=>array('create')),
	array('label'=>'Update Supplier', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Supplier', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Supplier', 'url'=>array('admin')),
	array('label'=>'Add Item', 'url'=>array('item/create','supplier_id'=>$model->id)),
);
?>

<h1>View Supplier #<?php echo $model->id; ?></h1>
<hr>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'supplier_name',
		'supplier_address',
		'supplier_contact_person',
		'supplier_contact_no',
		'supplier_email',
	),
)); ?>

<br>
<h3>Item</h3>
<hr>
<?php $itemid= 1;?>

<?php $en=Item::model()->findAll('supplier_id = :a', array(':a'=>$model->id));?>

<?php if (count($en) !== 0){?>

<?php foreach ($en as $row) { ?>

<?php /*<h1>Item # <?php echo $itemid . ': '. CHtml::link($row->item_description, array('item/view', 'id'=>$row->id)); $itemid++;?></h1>*/ ?>

<?php $this->widget ('zii.widgets.CdetailView', array(
	'data'=>$row,
	'attributes'=>array(
		//'id',
		array('label'=>'Item #' . $itemid, $itemid++, 'type'=>'html', 'value'=>CHtml::link(CHtml::encode($row->item_description), array('item/view','id'=>$row->id))) ,
		/*'item_qoh',
		'item_qoh_unit',
		'item_qty_min',
		'itm_qty_min_unit',
		'item_price',*/
		//array('label'=>'Supplier Name', 'value'=>$row->supplier->supplier_name),
	),
));
?>
<?php }} ?>