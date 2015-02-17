<?php
/* @var $this SaleController */
/* @var $model Sale */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sale-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sale_date (yyyy/mm/dd)'); ?>
		<!--?php echo $form->textField($model,'sale_date'); ?-->
		<?php echo $form->textField($model,'sale_date',array('size'=>15,'maxlength'=>10,/*'readonly'=>true,*/'value'=>date("Y-m-d"))); ?>
		<?php echo $form->error($model,'sale_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sale_officialreceipt_no'); ?>
		<?php echo $form->textField($model,'sale_officialreceipt_no',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sale_officialreceipt_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_id'); ?>
		
		<?php echo $form->dropDownList($model, 'customer_id', CHtml::listData(
		Customer::model()->findAll(), 'id', 'Fullname'),
		array('prompt' => 'Select customer name')
		);?>
		
		<?php echo $form->error($model,'customer_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->