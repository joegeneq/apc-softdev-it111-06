<?php
/* @var $this ItemStocksController */
/* @var $model ItemStocks */

$this->breadcrumbs=array(
'Items'=>array('/item'),
	'Item Stocks'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Item Stocks List', 'url'=>array('index')),
	array('label'=>'Manage Item Stocks', 'url'=>array('admin')),
	array('label'=>'Add Item Stock', 'url'=>array('create')),
	array('label'=>'Update Item Stock', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Item Stock', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<h1>View ItemStocks #<?php echo $model->id; ?></h1>

<?php 

$saledetailString = "";
		if ($model->saleDetail != null)
		{
		$saledetailString = $model->saleDetail->sale->sale_officialreceipt_no;
		}
		
		$itemString = "";
		if ($model->item != null)
		{
		$itemString = $model->item->item_description;
		}

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'item_stocks_serial_no',
		'item_stocks_defective_status',
		array('label'=>'Item Description', 'type'=>'html', 'value'=>CHtml::link(CHtml::encode($model->item->item_description), array('/item/view','id'=>$model->item_id))),
		'sale_detail_id',
	),
)); ?>

