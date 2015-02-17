<?php
/* @var $this CustomerController */
/* @var $data Customer */
require_once "function.php";
?>

<div class="view">


	<b><?php echo 'Name'; ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Fullname), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cus_address')); ?>:</b>
	<?php echo CHtml::encode($data->cus_address); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('cus_type')); ?>:</b>
	<?php echo CHtml::encode($data->cus_type); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('cus_country')); ?>:</b>
	<?php echo CHtml::encode($data->cus_country); ?>
	<br />

	

</div>