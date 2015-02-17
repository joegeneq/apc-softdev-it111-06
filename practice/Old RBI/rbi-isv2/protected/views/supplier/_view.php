<?php
/* @var $this SupplierController */
/* @var $data Supplier */
?>

<div class="view">

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->supplier_name), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_address')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_contact_person')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_contact_person); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_contact_no')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_contact_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_email')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_email); ?>
	<br />


</div>