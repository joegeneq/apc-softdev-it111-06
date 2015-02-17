<?php
/* @var $this ItemQtyController */
/* @var $data ItemQty */
?>

<div class="view">

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('item_id')); ?>:</b>
	<?php echo CHtml::encode($data->item->item_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_qty_date')); ?>:</b>
	<?php echo CHtml::encode($data->item_qty_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_qty_new')); ?>:</b>
	<?php echo CHtml::encode($data->item_qty_new); ?>
	<br />


</div>