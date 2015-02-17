<?php
/* @var $this SaleController */
/* @var $model Sale */

$this->breadcrumbs=array(
	'Sales'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Sales List', 'url'=>array('index')),
	array('label'=>'Manage Sales', 'url'=>array('admin')),
	array('label'=>'Create Sale', 'url'=>array('create')),
	array('label'=>'Update Sale', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sale', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	
	array('label'=>'Add Item in Sale', 'url'=>array('/saleDetail/create','sale_id'=>$model->id)),
	
);

?>


<h1>View Sale #<?php echo $model->id; ?></h1><hr>
<?php
$total = Yii::app()->db->createCommand("SELECT SUM(`sale_price`) AS `total` FROM `sale_detail` where `sale_id` = '$model->id'")->queryAll();

?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sale_date',
		'sale_officialreceipt_no',
		array('label'=>'Customer', 'type'=>'html', 'value'=>CHtml::link(CHtml::encode($model->customer->Fullname), array('/customer/view','id'=>$model->customer_id))),
		array('label'=>'Total Sale Price', 'value'=>$total[0]['total']),
	),
)); ?><!--?php echo 'Total Price:'. '</b> <span>'. ' Php '.($total[0]['total']). '</span>';?-->




<br>
<h3>Sale Details</h3>
<hr>


<?php 


$saledetailid = 1;?>
<?php $en=SaleDetail::model()->findAll('sale_id = :a', array(':a'=>$model->id));?>
<?php if (count($en) !== 0){?>

<?php foreach ($en as $row) { ?>
<?php /*<h1>Detail # <?php echo CHtml::link($saledetailid, array('saleDetail/view', 'id'=>$row->id)); $saledetailid++;?>:</h1><br>*/?>
<?php 




$this->widget ('zii.widgets.CdetailView', array(
	'data'=>$row,
	'attributes'=>array(
		array('label'=>'Item #' . $saledetailid, $saledetailid++, 'type'=>'html', 'value'=>$row->sale_quantity . " " . CHtml::link(CHtml::encode($row->item->item_description), array('/item/view','id'=>$row->item_id)) . " = " . $row->sale_price),
		//'sale_quantity',
		//'sale_price',
	),
));
?>
<?php }} ?>

