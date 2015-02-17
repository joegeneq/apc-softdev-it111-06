<?php
/* @var $this SaleController */
/* @var $model Sale */

$this->breadcrumbs=array(
	'Sales'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Sales List', 'url'=>array('index')),
	array('label'=>'Manage Sales', 'url'=>array('admin')),
	array('label'=>'Create Sale', 'url'=>array('create')),
	array('label'=>'View Sale', 'url'=>array('view', 'id'=>$model->id)),
	
);
?>

<h1>Update Sale <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>