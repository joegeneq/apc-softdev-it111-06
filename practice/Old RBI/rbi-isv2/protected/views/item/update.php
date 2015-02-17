<?php
/* @var $this ItemController */
/* @var $model Item */

$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Items List', 'url'=>array('index')),
	array('label'=>'Manage Items', 'url'=>array('admin')),
	array('label'=>'Create Item', 'url'=>array('create')),
	array('label'=>'View Item', 'url'=>array('view', 'id'=>$model->id)),
	
);
?>

<h1>Update Item <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>