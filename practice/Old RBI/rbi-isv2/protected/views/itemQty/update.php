<?php
/* @var $this ItemQtyController */
/* @var $model ItemQty */

$this->breadcrumbs=array(
'Items'=>array('/item'),
	'Item Supplies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Item Supplies List', 'url'=>array('index')),
	array('label'=>'Add Item Supply', 'url'=>array('create')),
	array('label'=>'View Item Supply', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Item Supplies', 'url'=>array('admin')),
);
?>

<h1>Update ItemQty <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>