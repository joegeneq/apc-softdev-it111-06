<?php
/* @var $this SaleDetailController */
/* @var $model SaleDetail */
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
		<?php echo $form->label($model,'sale_id'); ?>
		<?php echo $form->textField($model,'sale_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_id'); ?>
		<?php echo $form->textField($model,'item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sale_quantity'); ?>
		<?php echo $form->textField($model,'sale_quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sale_discount'); ?>
		<?php echo $form->textField($model,'sale_discount',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sale_price'); ?>
		<?php echo $form->textField($model,'sale_price',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->