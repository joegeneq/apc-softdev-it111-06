<?php
/* @var $this OrderDetailController */
/* @var $model OrderDetail */

$this->breadcrumbs=array(
'Orders'=>array('/order'),
	'Order Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Order Details List', 'url'=>array('index')),
	array('label'=>'Manage Order Details', 'url'=>array('admin')),
	//array('label'=>'Create OrderDetail', 'url'=>array('create')),
	//array('label'=>'Update Order Detail', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Order Detail', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	
);
?>

<h1>View OrderDetail #<?php echo $model->id; ?></h1>
<hr>
<?php 
$orderString = "";
		if ($model->order != null)
		{
		$orderString = $model->order->id;
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
		//'id',
		'order_id',
		array('label'=>'Item',
		'value'=>$model->item->item_description),
		'order_detail_qty',
	),
)); ?>

