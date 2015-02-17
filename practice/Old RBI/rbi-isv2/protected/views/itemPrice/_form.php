<?php
/* @var $this ItemPriceController */
/* @var $model ItemPrice */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'item-price-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'item_id'); ?>
		<?php echo $form->dropDownList($model, 'item_id', CHtml::listData(
			Item::model()->findAll(), 'id', 'item_description'),
			array('prompt' => 'Select an Item')
			); ?>
		<?php echo $form->error($model,'item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_price_date (yyyy/mm/dd)'); ?>
		<?php echo $form->textField($model,'item_price_date',array('size'=>10,'maxlength'=>10,/*'readonly'=>true,*/'value'=>date("Y-m-d"))); ?>
		<?php echo $form->error($model,'item_price_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_price'); ?>
		<?php echo $form->textField($model,'item_price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'item_price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->