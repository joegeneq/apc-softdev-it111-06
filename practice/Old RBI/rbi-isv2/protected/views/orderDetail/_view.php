<?php
/* @var $this OrderDetailController */
/* @var $data OrderDetail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_id')); ?>:</b>
	<?php echo CHtml::encode($data->order_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_id')); ?>:</b>
	<?php echo CHtml::encode($data->item->item_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_detail_qty')); ?>:</b>
	<?php echo CHtml::encode($data->order_detail_qty); ?>
	<br />


</div>