<?php
/* @var $this CustomerController */
/* @var $model Customer */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Customers List', 'url'=>array('index')),
	array('label'=>'Manage Customers', 'url'=>array('admin')),
	array('label'=>'Create Customer', 'url'=>array('create')),
	array('label'=>'Update Customer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Customer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Add Order', 'url'=>array('order/create','customer_id'=>$model->id)),
	array('label'=>'Add Sale', 'url'=>array('sale/create','customer_id'=>$model->id)),
	array('label'=>'Add Replacement', 'url'=>array('replacement/create','customer_id'=>$model->id)),
);
?>

<h1>View Customer #<?php echo $model->id; ?></h1>

<?php 
$companyString = "";
		if ($model->company != null)
		{
		$companyString = $model->company->company_name;
		}

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cus_firstname',
		'cus_lastname',
		'cus_address',
		'cus_contact_no',
		'cus_email',
		'cus_type',
		'cus_country',
		'cus_zip_code',
		array('label'=>'Company', 'type'=>'html', 'value'=>CHtml::link(CHtml::encode($companyString), array('company/view','id'=>$model->id))),
	),
)); ?>

<?php /*<br>
<h1>Company</h1>
<hr />
<?php $en=Company::model()->findAll('company_name = :value', array('value'=>$companyString));?>
<?php if (count($en) !== 0){?>

<?php foreach ($en as $row) { ?>
<?php $this->widget ('zii.widgets.CdetailView', array(
		'data'=>$row,
		'attributes'=>array(
		'id',
		'company_name',
		'company_address',
		'company_contactno',
),
));
?><br>
<?php }} ?>*/?>

<br>
<h3>Order</h3>
<hr>
<?php $orderid = 1;?>
<?php $en=Order::model()->findAll('customer_id = :a', array(':a'=>$model->id));?>

<?php if (count($en) !== 0){?>

<?php foreach ($en as $row) { ?>

<?php /*<h1> Order # <?php echo CHtml::link($orderid, array('order/view', 'id'=>$row->id));; $orderid++?>:</h1>*/?>

<?php $this->widget ('zii.widgets.CdetailView', array(
	'data'=>$row,
	'attributes'=>array(
		//'id',
		array('label'=>'Order #' . $orderid, $orderid++, 'type'=>'html','value'=>CHtml::link(CHtml::encode("(" . $row->order_date . ") " . $row->order_status), array('order/view','id'=>$row->id))),
		//'order_date',
		//'order_status',
		//array('label'=>'Customer Name', 'value'=>$row->customer->getFullname()),
	),
));
?>
<?php }} ?>

<br>
<h3>Sale</h3>
<hr>
<?php $saleid= 1;?>

<?php $en=Sale::model()->findAll('customer_id = :a', array(':a'=>$model->id));?>

<?php if (count($en) !== 0){?>

<?php foreach ($en as $row) { ?>

<?php /*<h1>Sale # <?php echo $saleid . ': '. CHtml::link($row->sale_officialreceipt_no, array('sale/view', 'id'=>$row->id)); $saleid++;?></h1>*/?>

<?php $this->widget ('zii.widgets.CdetailView', array(
	'data'=>$row,
	'attributes'=>array(
		//'id',
		array('label'=>'Sale #' . $saleid, $saleid++, 'type'=>'html', 'value'=>CHtml::link(CHtml::encode($row->sale_officialreceipt_no), array('/sale/view','id'=>$row->id))),
		//'sale_officialreceipt_no',
		//array('label'=>'Customer Name', 'value'=>$row->customer->getFullname()),
	),
));
?>
<?php }} ?>

<br>
<h3>Replacement</h3>
<hr>

<?php $en=Replacement::model()->findAll('customer_id = :a', array(':a'=>$model->id));?>

<?php if (count($en) !== 0){?>

<?php foreach ($en as $row) { ?>

<h1><?php echo 'Replacement # '. CHtml::link($row->id, array('replacement/view', 'id'=>$row->id));?></h1>
<br>
<?php $this->widget ('zii.widgets.CdetailView', array(
	'data'=>$row,
	'attributes'=>array(
		//'id',
		'replacement_date',
		//array('label'=>'Customer Name', 'value'=>$row->customer->getFullname()),
		array('label'=>'Item Serial No.', 'value'=>$row->sale->sale_officialreceipt_no),
	),
));
?><br>
<?php }} ?>

