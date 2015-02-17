<?php
/* @var $this ReplacementDetailController */
/* @var $model ReplacementDetail */
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
		<?php echo $form->label($model,'replacement_id'); ?>
		<?php echo $form->textField($model,'replacement_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_for_replacement_id'); ?>
		<?php echo $form->textField($model,'item_for_replacement_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_stocks_for_repl_id'); ?>
		<?php echo $form->textField($model,'item_stocks_for_repl_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_replaced_id'); ?>
		<?php echo $form->textField($model,'item_replaced_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_stocks_replaced_id'); ?>
		<?php echo $form->textField($model,'item_stocks_replaced_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->