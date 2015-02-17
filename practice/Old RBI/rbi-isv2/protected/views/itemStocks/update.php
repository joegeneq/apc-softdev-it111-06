<?php
/* @var $this ItemStocksController */
/* @var $model ItemStocks */

$this->breadcrumbs=array(
'Items'=>array('/item'),
	'Item Stocks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Item Stocks List', 'url'=>array('index')),
	array('label'=>'Manage Item Stocks', 'url'=>array('admin')),
	array('label'=>'Add Item Stock', 'url'=>array('create')),
	array('label'=>'View Item Stock', 'url'=>array('view', 'id'=>$model->id)),
	
);
?>

<h1>Update ItemStocks <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>