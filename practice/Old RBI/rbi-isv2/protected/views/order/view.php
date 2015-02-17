<?php
/* @var $this OrderController */
/* @var $model Order */

$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Orders List', 'url'=>array('index')),
	array('label'=>'Manage Orders', 'url'=>array('admin')),
	array('label'=>'Create Order', 'url'=>array('create')),
	array('label'=>'Update Order', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Order', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Add Item in Order', 'url'=>array('orderDetail/create', 'order_id'=>$model->id)),
	
	
);
?>

<h1>View Order #<?php echo $model->id; ?></h1><hr>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'order_date',
		'order_status',
		array('label'=>'Customer', 'type'=>'html', 'value'=>CHtml::link(CHtml::encode($model->customer->Fullname), array('/customer/view','id'=>$model->customer_id))),
	),
)); ?>

<br>
<h3>Order Details</h3>
<hr>


<?php 


$orderdetailid = 1;?>
<?php $en=OrderDetail::model()->findAll('order_id = :a', array(':a'=>$model->id));?>
<?php if (count($en) !== 0){?>

<?php foreach ($en as $row) { ?>
<?php /*<h1>Detail # <?php echo CHtml::link($orderdetailid, array('orderDetail/view', 'id'=>$row->id)); $orderdetailid++;?>:</h1>*/?>
<?php 




$this->widget ('zii.widgets.CdetailView', array(
	'data'=>$row,
	'attributes'=>array(
		array('label'=>'Item #' . $orderdetailid, $orderdetailid++, 'type'=>'html', 'value'=>$row->order_detail_qty . " " . CHtml::link(CHtml::encode($row->item->item_description), array('item/view','id'=>$row->item_id))),
		//'order_detail_qty',
		
	),
));
?>
<?php }} ?>

