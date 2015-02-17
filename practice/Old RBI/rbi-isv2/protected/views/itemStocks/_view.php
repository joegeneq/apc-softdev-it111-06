<?php
/* @var $this ItemStocksController */
/* @var $data ItemStocks */
require_once "function.php";
?>

<div class="view">

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_stocks_serial_no')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->item_stocks_serial_no), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_stocks_defective_status')); ?>:</b>
	<?php echo CHtml::encode($data->item_stocks_defective_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_id')); ?>:</b>
	<?php echo CHtml::encode($data->item->item_description); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_detail_id')); ?>:</b>
	<?php echo CHtml::encode(getSerial($data->sale_detail_id)); ?>
	<br />

*/?>


</div>