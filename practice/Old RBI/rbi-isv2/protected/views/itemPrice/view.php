<?php
/* @var $this ItemPriceController */
/* @var $model ItemPrice */

$this->breadcrumbs=array(
'Items'=>array('/item'),
	'Item Prices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Item Prices', 'url'=>array('index')),
	//array('label'=>'Create ItemPrice', 'url'=>array('create')),
	array('label'=>'Update Item Price', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Item Price', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Item Prices', 'url'=>array('admin')),
);
?>

<h1>View ItemPrice #<?php echo $model->id; ?></h1>
<hr>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		array('label'=>'Item Description', 'type'=>'html', 'value'=>CHtml::link(CHtml::encode($model->item->item_description), array('/item/view','id'=>$model->item_id))),
		'item_price_date',
		'item_price',
	),
)); ?>

<?php /*<br>
<h1>Item</h1>
<hr>
<?php 
	$itemString = "";
		if ($model->item != null)
		{
		$itemString = $model->item->item_description;
		}
?>
<?php $en=Item::model()->findAll('item_description = :value', array('value'=>$itemString));?>
<?php if (count($en) !== 0){?>

<?php foreach ($en as $row) { ?>
<h1><?php echo 'Item: '. CHtml::link($row->item_description, array('item/view', 'id'=>$row->id));?></h1>
<br>
<?php $this->widget ('zii.widgets.CdetailView', array(
		'data'=>$row,
		'attributes'=>array(
		//'id',
		'item_description',
		/*'item_qoh',
		'item_qoh_unit',
		'item_qty_min',
		'itm_qty_min_unit',
		'item_price',
		array('label'=>'Supplier Name', 'value'=>$row->supplier->supplier_name),
),
));
?><br>
<?php }} ?>*/?>

<?php


$price =Yii::app()->db->createCommand("SELECT `item_price` AS `p` FROM `item_price`  ORDER BY `id` DESC LIMIT 1")->queryAll();

if(isset($price[0]['p'])){
$hehe =($price[0]['p']);
$sql1 = "UPDATE  `rbi-is`.`item` SET  `item_price` =  '$hehe' WHERE  `item`.`id` = '$model->item_id'";
$dataReader =  Yii::app()->db->createCommand($sql1)->query();
}
?>


