<?php
/* @var $this ReplacementController */
/* @var $data Replacement */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('replacement_date')); ?>:</b>
	<?php echo CHtml::encode($data->replacement_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer->Fullname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_id')); ?>:</b>
	<?php echo CHtml::encode($data->sale->sale_officialreceipt_no); ?>
	<br />


</div>