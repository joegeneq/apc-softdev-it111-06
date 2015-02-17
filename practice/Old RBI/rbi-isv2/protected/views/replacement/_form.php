<?php
/* @var $this ReplacementController */
/* @var $model Replacement */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'replacement-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'replacement_date (yyyy/mm/dd)'); ?>
		<?php echo $form->textField($model,'replacement_date', array('size'=>10,'maxlength'=>10,/*'readonly'=>true,*/'value'=>date("Y-m-d"))); ?>
		<?php echo $form->error($model,'replacement_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_id'); ?>
		<?php echo $form->dropDownList($model, 'customer_id', CHtml::listData(
		Customer::model()->findAll(), 'id', 'Fullname'),
		array('prompt' => 'Select customer')
		); ?>
		<?php echo $form->error($model,'customer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sale_id'); ?>
		<?php echo $form->dropDownList($model, 'sale_id', CHtml::listData(
		Sale::model()->findAll(), 'id', 'sale_officialreceipt_no'),
		array('prompt' => 'Select a Sale OR No.')
		); ?>
		<?php echo $form->error($model,'sale_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->