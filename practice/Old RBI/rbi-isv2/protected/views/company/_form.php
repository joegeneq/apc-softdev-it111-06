<?php
/* @var $this CompanyController */
/* @var $model Company */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'company_name'); ?>
		<?php echo $form->textField($model,'company_name',array('size'=>60,'maxlength'=>225)); ?>
		<?php echo $form->error($model,'company_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_address'); ?>
		<?php echo $form->textField($model,'company_address',array('size'=>60,'maxlength'=>225)); ?>
		<?php echo $form->error($model,'company_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company_contactno'); ?>
		<?php echo $form->textField($model,'company_contactno',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'company_contactno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->