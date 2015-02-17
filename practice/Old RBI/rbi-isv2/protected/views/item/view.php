<?php
/* @var $this ItemController */
/* @var $model Item */

$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Items List', 'url'=>array('index')),
	array('label'=>'Manage Items', 'url'=>array('admin')),
	array('label'=>'Create Item', 'url'=>array('create')),
	array('label'=>'Update Item', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Item', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	
	array('label'=>'Add Item Supply', 'url'=>array('itemQty/create','item_id'=>$model->id)),
	array('label'=>'Add Item Stock', 'url'=>array('itemStocks/create','item_id'=>$model->id)),
	array('label'=>'Update Item Price', 'url'=>array('itemPrice/create','item_id'=>$model->id)),
);
?>

<h1>View Item #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'item_description',
		'item_qoh',
		'item_qoh_unit',
		'item_qty_min',
		'item_qty_min_unit',
		'item_price',
		array('label'=>'Supplier', 'type'=>'html', 'value'=>CHtml::link(CHtml::encode($model->supplier->supplier_name), array('/supplier/view','id'=>$model->supplier_id))),
	),
)); 

if ($model->item_qoh < $model->item_qty_min) 
	{
		echo "<script>alert('You need to order new supplies for this item');</script>";
	}
	
?>

<br>
<h3>Item Stocks</h3>
<hr>

<?php $itemstocksid= 1;?>
<?php $en=ItemStocks::model()->findAll('item_id = :a AND sale_detail_id is null',  array(':a'=>$model->id));?>
<?php if (count($en) !== 0){?>
<?php foreach ($en as $row) { ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$row,
	'attributes'=>array(
		array('label'=>'Stock '. $itemstocksid, $itemstocksid++, 'type'=>'html', 'value'=>CHtml::link(CHtml::encode($row->item_stocks_serial_no), array('itemStocks/view','id'=>$row->id)))) ,

));?>
<?php }} ?>

<br>
<h3>Item Price Updates</h3>
<hr>
<?php $itempriceid= 1;?>
<?php $en=ItemPrice::model()->findAll('item_id = :a', array(':a'=>$model->id));?>
<?php if (count($en) !== 0){?>
<?php foreach ($en as $row) { ?>
<?php /*<h4>Item Price # <?php echo $itempriceid; $itempriceid++;?></h4><br>*/?>
<?php $this->widget ('zii.widgets.CdetailView', array(
	'data'=>$row,
	'attributes'=>array(
	//'id',
		//'cus_firstname',
		//'cus_lastname',
		array('label'=>'Update #' . $itempriceid, $itempriceid++, 'value'=>"(" . $row->item_price_date . ")    " . $row->item_price),
		//'item_price_date',
		//'item_price_activity',
		//'item_price'
	),
));
?>
<?php }} ?>

