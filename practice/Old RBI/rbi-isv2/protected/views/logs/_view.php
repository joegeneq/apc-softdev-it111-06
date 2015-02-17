<?php
/* @var $this LogsController */
/* @var $data Logs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('log_date_time')); ?>:</b>
	<?php echo CHtml::encode($data->log_date_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('log_action')); ?>:</b>
	<?php echo CHtml::encode($data->log_action); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('log_module')); ?>:</b>
	<?php echo CHtml::encode($data->log_module); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user->fullname); ?>
	<br />


</div>