<?php
/* @var $this ReplacementDetailController */
/* @var $data ReplacementDetail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('replacement_id')); ?>:</b>
	<?php echo CHtml::encode($data->replacement_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_for_replacement_id')); ?>:</b>
	<?php echo CHtml::encode($data->itemForReplacement->item_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_stocks_for_replacement')); ?>:</b>
	<?php echo CHtml::encode($data->itemStocksForRepl->item_stocks_serial_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_replaced_id')); ?>:</b>
	<?php echo CHtml::encode($data->itemReplaced->item_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_stocks_replaced_id')); ?>:</b>
	<?php echo CHtml::encode($data->itemStocksReplaced->item_stocks_serial_no); ?>
	<br />


</div>