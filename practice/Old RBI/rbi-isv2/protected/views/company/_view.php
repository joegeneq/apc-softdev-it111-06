<?php
/* @var $this CompanyController */
/* @var $data Company */
?>

<div class="view">

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->company_name), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_address')); ?>:</b>
	<?php echo CHtml::encode($data->company_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company_contactno')); ?>:</b>
	<?php echo CHtml::encode($data->company_contactno); ?>
	<br />


</div>