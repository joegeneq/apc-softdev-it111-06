<?php
/* @var $this ReplacementDetailController */
/* @var $model ReplacementDetail */

$this->breadcrumbs=array(
'Replacements'=>array('/replacement'),
	'Replacement Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Replacement Details List', 'url'=>array('index')),
	array('label'=>'Manage Replacement Details', 'url'=>array('admin')),
	//array('label'=>'Update Replacement Detail', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Replacement Detail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<h1>View ReplacementDetail #<?php echo $model->id; ?></h1>
<hr />

<?php 
	$replacementString = "";
		if ($model->replacement != null)
		{
		$replacementString = $model->replacement->id;
		}
		
	$itemForReplString = "";
		if ($model->itemForReplacement != null)
		{
		$itemForReplString = $model->itemForReplacement->item_description;
		}
		
	$itemStocksForReplString = "";
		if ($model->itemStocksForRepl != null)
		{
		$itemStocksForReplString = $model->itemStocksForRepl->item_stocks_serial_no;
		}
		
	$itemReplString = "";
		if ($model->itemReplaced != null)
		{
		$itemReplString = $model->itemReplaced->item_description;
		}
		
	$itemStocksReplString = "";
		if ($model->itemStocksReplaced != null)
		{
		$itemStocksReplString = $model->itemStocksReplaced->item_stocks_serial_no;
		}
		
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'replacement_id',
		array('label'=>'Item For Replacement', 'value'=>$model->itemForReplacement->item_description),
		array('label'=>'Item Stocks For Replacement', 'value'=>$model->itemStocksForRepl->item_stocks_serial_no),
		array('label'=>'Item Replaced', 'value'=>$model->itemReplaced->item_description),
		array('label'=>'Item Stocks Replaced', 'value'=>$model->itemStocksReplaced->item_stocks_serial_no),
	),
)); ?>

<?php /*

<?php //$en=Replacement::model()->findAll('id = :value', array('value'=>$replacementString));?>
<?php //if (count($en) !== 0){?>

<?php //foreach ($en as $row) { ?>
<h1><?php //echo 'Replacement: '. CHtml::link($row->id, array('replacement/view', 'id'=>$row->id));?></h1>
<br>
<?php /*$this->widget ('zii.widgets.CdetailView', array(
		'data'=>$row,
		'attributes'=>array(
		//'id',
		'replacement_date',
		array('label'=>'Customer Name', 'value'=>$row->customer->getFullname()),
		array('label'=>'Sale Official Receipt No.', 'value'=>$row->sale->sale_officialreceipt_no),
),
));
?><br>
<?php }} ?>

<br>
<h1>Item for Replacement</h1>
<hr />
<?php $en=Item::model()->findAll('item_description = :value', array('value'=>$itemForReplString));?>
<?php if (count($en) !== 0){?>

<?php foreach ($en as $row) { ?>
<h1><?php echo 'Item: '. CHtml::link($row->item_description, array('item/view', 'id'=>$row->id));?></h1>
<br>
<?php $this->widget ('zii.widgets.CdetailView', array(
		'data'=>$row,
		'attributes'=>array(
		//'id',
		//'item_description',
		/*'item_qoh',
		'item_qoh_unit',
		'item_qty_min',
		'itm_qty_min_unit',
		'item_price',
		array('label'=>'Supplier Name', 'value'=>$row->supplier->supplier_name),
),
));
?><br>
<?php }} ?>

<br>
<h1>Item Stock for Replacement</h1>
<hr />
<?php $en=ItemStocks::model()->findAll('item_stocks_serial_no = :value', array('value'=>$itemStocksForReplString));?>
<?php if (count($en) !== 0){?>

<?php foreach ($en as $row) { ?>
<h1><?php echo 'Stock Serial No.: '. CHtml::link($row->item_stocks_serial_no, array('itemStocks/view', 'id'=>$row->id));?></h1>
<br>
<?php $this->widget ('zii.widgets.CdetailView', array(
		'data'=>$row,
		'attributes'=>array(
		//'id',
		//'item_stocks_serial_no',
		'item_stocks_color',
		//'item_id',
		//array('label'=>'Item', 'value'=>row->item->item_description),
),
));
?><br>
<?php }} ?>

<br>
<h1>Item Replaced</h1>
<hr />
<?php $en=Item::model()->findAll('item_description = :value', array('value'=>$itemReplString));?>
<?php if (count($en) !== 0){?>

<?php foreach ($en as $row) { ?>
<h1><?php echo 'Item: '. CHtml::link($row->item_description, array('item/view', 'id'=>$row->id));?></h1>
<br>
<?php $this->widget ('zii.widgets.CdetailView', array(
		'data'=>$row,
		'attributes'=>array(
		//'id',
		//'item_description',
		
		/*'item_qoh',
		'item_qoh_unit',
		'item_qty_min',
		'itm_qty_min_unit',
		'item_price',
		array('label'=>'Supplier Name', 'value'=>$row->supplier->supplier_name),
),
));
?><br>
<?php }} ?>

<br>
<h1>Item Stock Replaced</h1>
<hr />
<?php $en=ItemStocks::model()->findAll('item_stocks_serial_no = :value', array('value'=>$itemStocksReplString));?>
<?php if (count($en) !== 0){?>

<?php foreach ($en as $row) { ?>
<h1><?php echo 'Stock Serial No.: '. CHtml::link($row->item_stocks_serial_no, array('itemStocks/view', 'id'=>$row->id));?></h1>
<br>
<?php $this->widget ('zii.widgets.CdetailView', array(
		'data'=>$row,
		'attributes'=>array(
		//'id',
		//'item_stocks_serial_no',
		'item_stocks_color',
		//'item_id',
		//array('label'=>'Item', 'value'=>row->item->item_description),
),
));
?><br>
<?php }} ?>

*/?>