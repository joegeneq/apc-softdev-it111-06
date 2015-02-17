<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'order_date (yyyy/mm/dd)'); ?>
		<?php echo $form->textField($model,'order_date', array('size'=>10,'maxlength'=>10,/*'readonly'=>true,*/'value'=>date("Y-m-d"))); ?>
		<?php echo $form->error($model,'order_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order_status'); ?>
		<?php echo $form->dropDownList($model,'order_status',
			array('prompt' => 'Select order status',
					'Pending' => 'Pending',
					'Confirmed' => 'Confirmed',
					'Cancelled' => 'Cancelled'));?>
		<?php echo $form->error($model,'order_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customer_id'); ?>
		<?php echo $form->dropDownList($model, 'customer_id', CHtml::listData(
		Customer::model()->findAll(), 'id', 'Fullname'),
		array('empty' => 'Select customer')
		); ?>
		<?php echo $form->error($model,'customer_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->