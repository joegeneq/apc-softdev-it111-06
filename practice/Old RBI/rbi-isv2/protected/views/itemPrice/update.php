<?php
/* @var $this ItemPriceController */
/* @var $model ItemPrice */

$this->breadcrumbs=array(
'Items'=>array('/item'),
	'Item Prices'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ItemPrice', 'url'=>array('index')),
	array('label'=>'Create ItemPrice', 'url'=>array('create')),
	array('label'=>'View ItemPrice', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ItemPrice', 'url'=>array('admin')),
);
?>

<h1>Update ItemPrice <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>