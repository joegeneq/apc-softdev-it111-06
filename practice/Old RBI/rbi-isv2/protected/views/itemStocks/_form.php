<?php
/* @var $this ItemStocksController */
/* @var $model ItemStocks */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'item-stocks-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'item_stocks_serial_no'); ?>
		<?php echo $form->textField($model,'item_stocks_serial_no',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'item_stocks_serial_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_stocks_defective_status'); ?>
		<?php echo $form->dropDownList($model, 'item_stocks_defective_status', 
		 	array('prompt' => 'Select defective status', 'Yes' => 'Yes', 'No' => 'No')
		 	);?>
		<?php echo $form->error($model,'item_stocks_defective_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_id'); ?>
		<?php echo $form->dropDownList($model, 'item_id', CHtml::listData(
		 	Item::model()->findAll(), 'id', 'item_description'),
		 	array('prompt' => 'Select item')
		 	);?>
		<?php echo $form->error($model,'item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sale_detail_id'); ?>
		<?php echo $form->dropDownList($model, 'sale_detail_id', CHtml::listData(
		 	Sale::model()->findAll(), 'id', 'sale_officialreceipt_no'),
		 	array('prompt' => 'Select sale official receipt no')
		 	);?>
		<?php echo $form->error($model,'sale_detail_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->