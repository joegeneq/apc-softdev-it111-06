<?php
/* @var $this SaleDetailController */
/* @var $model SaleDetail */

$this->breadcrumbs=array(
'Sales'=>array('/sale'),
	'Sale Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Sale Details List', 'url'=>array('index')),
	array('label'=>'Manage Sale Details', 'url'=>array('admin')),
	//array('label'=>'Create SaleDetail', 'url'=>array('create')),
	//array('label'=>'Update SaleDetail', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sale Detail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	
	array('label'=>'Add Item', 'url'=>array('saleDetail/create','sale_id'=>$model->id)),
);
?>



<h1>View Sale Detail #<?php echo $model->id; ?></h1>
<hr>
<?php 
$saleString = "";
		if ($model->sale != null)
		{
		$saleString = $model->sale->sale_officialreceipt_no;
		}
		
		$itemString = "";
		if ($model->item != null)
		{
		$itemString = $model->item->item_description;
		}
		
		/*$itemStocksString = ""
		if ($model->item->itemStocks != null)
		{
		$itemStocksString = $model->item->itemStocks->id;
		}*/

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		array('label'=>'Sale Official Receipt No.', 
		'value'=>$model->sale->sale_officialreceipt_no),
		
		array('label'=>'Item',
		'value'=>$model->item->item_description),
		'sale_quantity',
		'sale_discount',
		'sale_price',
	),
)); ?>

