<?php
/* @var $this ItemStocksController */
/* @var $model ItemStocks */
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
		<?php echo $form->label($model,'item_stocks_serial_no'); ?>
		<?php echo $form->textField($model,'item_stocks_serial_no',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_stocks_defective_status'); ?>
		<?php echo $form->textField($model,'item_stocks_defective_status',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_id'); ?>
		<?php echo $form->textField($model,'item_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sale_detail_id'); ?>
		<?php echo $form->textField($model,'sale_detail_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->