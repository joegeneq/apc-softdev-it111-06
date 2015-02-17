<?php
/* @var $this LogsController */
/* @var $model Logs */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'logs-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'log_date_time'); ?>
		<?php echo $form->textField($model,'log_date_time'); ?>
		<?php echo $form->error($model,'log_date_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'log_action'); ?>
		<?php echo $form->textField($model,'log_action',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'log_action'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'log_module'); ?>
		<?php echo $form->textField($model,'log_module',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'log_module'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<!--?php echo $form->textField($model,'user_id'); ?-->
		<?php echo $form->dropDownList($model, 'user_id', CHtml::listData(
		User::model()->findAll(), 'id', 'fullname'),
		array('prompt' => 'Select User Name')
		); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->