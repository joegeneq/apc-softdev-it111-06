<?php
/* @var $this ItemPriceController */
/* @var $data ItemPrice */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_id')); ?>:</b>
	<?php echo CHtml::encode($data->item->item_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_price_date')); ?>:</b>
	<?php echo CHtml::encode($data->item_price_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_price')); ?>:</b>
	<?php echo CHtml::encode($data->item_price); ?>
	<br />


</div>