<?php
/* @var $this ReplacementDetailController */
/* @var $model ReplacementDetail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'replacement-detail-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'replacement_id'); ?>
		<?php echo $form->labelEx($model,$model->replacement->id); ?>
		<!--?php echo $form->dropDownList($model, 'replacement_id', CHtml::listData(
			Item::model()->findAll(), 'id', 'id'),
			array('prompt' => 'Select a Replacement ID')
			); ?-->
		<?php echo $form->error($model,'replacement_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_for_replacement_id'); ?>
		<?php echo $form->dropDownList($model, 'item_for_replacement_id', CHtml::listData(
			Item::model()->findAll(), 'id', 'item_description'),
			array('prompt' => 'Select an Item')
			); ?>
		<?php echo $form->error($model,'item_for_replacement_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_stocks_for_replacement'); ?>
		<?php echo $form->dropDownList($model, 'item_stocks_for_repl_id', CHtml::listData(
			ItemStocks::model()->findAll(), 'id', 'item_stocks_serial_no'),
			array('prompt' => 'Select an Item Serial No.')
			); ?>
		<?php echo $form->error($model,'item_stocks_for_repl_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_replaced_id'); ?>
		<?php echo $form->dropDownList($model, 'item_replaced_id', CHtml::listData(
			Item::model()->findAll(), 'id', 'item_description'),
			array('prompt' => 'Select an Item')
			); ?>
		<?php echo $form->error($model,'item_replaced_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_stocks_replaced_id'); ?>
		<?php echo $form->dropDownList($model, 'item_stocks_replaced_id', CHtml::listData(
			ItemStocks::model()->findAll(), 'id', 'item_stocks_serial_no'),
			array('prompt' => 'Select an Item Serial No.')
			); ?>
		<?php echo $form->error($model,'item_stocks_replaced_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->