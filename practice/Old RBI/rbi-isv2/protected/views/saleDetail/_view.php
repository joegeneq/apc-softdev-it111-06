<?php
/* @var $this SaleDetailController */
/* @var $data SaleDetail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_detail_id')); ?>:</b>
	<?php echo CHtml::encode($data->sale->sale_officialreceipt_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_id')); ?>:</b>
	<?php echo CHtml::encode($data->item->item_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->sale_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_discount')); ?>:</b>
	<?php echo CHtml::encode($data->sale_discount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_price')); ?>:</b>
	<?php echo CHtml::encode($data->sale_price); ?>
	<br />


</div>