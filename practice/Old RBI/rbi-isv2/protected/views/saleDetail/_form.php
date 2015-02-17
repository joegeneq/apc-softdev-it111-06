<?php
/* @var $this SaleDetailController */
/* @var $model SaleDetail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sale-detail-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sale_id'); ?>
		<!--?php echo $form->textField($model,'sale_id'); ?-->
		<!--?php echo $form->dropDownList($model, 'sale_id', CHtml::listData(
		Sale::model()->findAll(), 'id', 'sale_officialreceipt_no'),
		array('prompt' => 'Select sale official receipt no')
		);?-->
		<!--?php echo $form->textField($model,'sale_id', array('value'=>$model->sale->sale_officialreceipt_no, 'readOnly'=>true));?-->
		<?php echo $form->labelEx($model,$model->sale->sale_officialreceipt_no); ?>
		<?php echo $form->error($model,'sale_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_id'); ?>
		<!--?php echo $form->textField($model,'item_id'); ?-->
		<?php echo $form->dropDownList($model, 'item_id', CHtml::listData(
		Item::model()->findAll(), 'id', 'item_description'),
		array('prompt' => 'Select an item')
		);?>
		<?php echo $form->error($model,'item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sale_quantity'); ?>
		<?php echo $form->textField($model,'sale_quantity'); ?>
		<?php echo $form->error($model,'sale_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sale_discount (%)'); ?>
		<?php echo $form->textField($model,'sale_discount',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'sale_discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sale_price'); ?>
		<?php echo $form->textField($model,'sale_price',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sale_price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->