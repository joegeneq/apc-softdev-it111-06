<?php
/* @var $this ReplacementDetailController */
/* @var $model ReplacementDetail */

$this->breadcrumbs=array(
'Replacements'=>array('/replacement'),
	'Replacement Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Replacement Details List', 'url'=>array('index')),
	array('label'=>'Manage Replacement Details', 'url'=>array('admin')),
	//array('label'=>'Create Replacement Detail', 'url'=>array('create')),
	array('label'=>'View Replacement Detail', 'url'=>array('view', 'id'=>$model->id)),
	
);
?>

<h1>Update ReplacementDetail <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>