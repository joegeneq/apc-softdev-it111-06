<?php
/* @var $this SaleController */
/* @var $data Sale */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_date')); ?>:</b>
	<?php echo CHtml::encode($data->sale_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_officialreceipt_no')); ?>:</b>
	<?php echo CHtml::encode($data->sale_officialreceipt_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer->Fullname); ?>
	<br />


</div>