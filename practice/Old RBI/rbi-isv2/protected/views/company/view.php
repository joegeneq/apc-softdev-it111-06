<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Companies List', 'url'=>array('index')),
	array('label'=>'Manage Companies', 'url'=>array('admin')),
	array('label'=>'Create Company', 'url'=>array('create')),
	array('label'=>'Update Company', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Company', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Add Customer', 'url'=>array('customer/create', 'company_id'=>$model->id,'cus_type'=>'Company')),
);
?>

<h1>View Company #<?php echo $model->id; ?></h1><hr>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'company_name',
		'company_address',
		'company_contactno',
	),
)); ?>

<br><br>
<h3>Customers</h3>
<hr>

<?php $customerid= 1;?>
<?php $en=Customer::model()->findAll('company_id = :a', array(':a'=>$model->id));?>
<?php if (count($en) !== 0){?>
<?php foreach ($en as $row) { ?>
<?php /*<h4>Customer # <?php echo $customerid. '. '. CHtml::link($row->getFullname(), array('customer/view', 'id'=>$row->id));; $customerid++;?></h4>*/?>
<?php $this->widget ('zii.widgets.CdetailView', array(
	'data'=>$row,
	'attributes'=>array(
	//'id',
		//'cus_firstname',
		//'cus_lastname',
		array('label'=>'Customer #' . $customerid, $customerid++, 'type'=>'html', 'value'=>CHtml::link(CHtml::encode($row->cus_firstname. " " . $row->cus_lastname ), array('customer/view','id'=>$row->id))) ,
		//'cus_address',
		//'cus_contact_no',
		//'cus_email',
		//'cus_type',
		//'cus_country',
		//'cus_zip_code'
	),
));
?><br>

<?php }} ?>
