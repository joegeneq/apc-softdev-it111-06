<?php
/* @var $this ItemController */
/* @var $model Item */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'item-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'item_description'); ?>
		<?php echo $form->textField($model,'item_description',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'item_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_qoh'); ?>
		<?php echo $form->textField($model,'item_qoh'); ?>
		<?php echo $form->error($model,'item_qoh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_qoh_unit'); ?>
		<?php echo $form->textField($model,'item_qoh_unit',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'item_qoh_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_qty_min'); ?>
		<?php echo $form->textField($model,'item_qty_min'); ?>
		<?php echo $form->error($model,'item_qty_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_qty_min_unit'); ?>
		<?php echo $form->textField($model,'item_qty_min_unit',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'item_qty_min_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_price'); ?>
		<?php echo $form->textField($model,'item_price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'item_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supplier_id'); ?>
		<?php echo $form->dropDownList($model, 'supplier_id', CHtml::listData(
		Supplier::model()->findAll(), 'id', 'supplier_name'),
		array('prompt' => 'Select a supplier')
		); ?>
		<?php echo $form->error($model,'supplier_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->