<?php
/* @var $this ItemController */
/* @var $model Item */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_description'); ?>
		<?php echo $form->textField($model,'item_description',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_qoh'); ?>
		<?php echo $form->textField($model,'item_qoh'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_qoh_unit'); ?>
		<?php echo $form->textField($model,'item_qoh_unit',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_qty_min'); ?>
		<?php echo $form->textField($model,'item_qty_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_qty_min_unit'); ?>
		<?php echo $form->textField($model,'item_qty_min_unit',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_price'); ?>
		<?php echo $form->textField($model,'item_price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supplier_id'); ?>
		<?php echo $form->textField($model,'supplier_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->