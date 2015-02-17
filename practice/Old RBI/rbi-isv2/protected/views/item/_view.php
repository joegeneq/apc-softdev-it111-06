<?php
/* @var $this ItemController */
/* @var $data Item */
?>

<div class="view">



	<b><?php echo CHtml::encode($data->getAttributeLabel('item_description')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->item_description), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_qoh')); ?>:</b>
	<?php echo CHtml::encode($data->item_qoh); ?> <?php echo CHtml::encode($data->item_qoh_unit); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('item_qty_min')); ?>:</b>
	<?php echo CHtml::encode($data->item_qty_min); ?> <?php echo CHtml::encode($data->item_qty_min_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_price')); ?>:</b>
	<?php echo CHtml::encode($data->item_price); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_id')); ?>:</b>
	<?php echo CHtml::encode($data->supplier->supplier_name); ?>
	<br />


</div>