<?php
/* @var $this ReplacementController */
/* @var $model Replacement */

$this->breadcrumbs=array(
	'Replacements'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Replacements List', 'url'=>array('index')),
	array('label'=>'Manage Replacements', 'url'=>array('admin')),
	array('label'=>'Create Replacement', 'url'=>array('create')),
	array('label'=>'View Replacement', 'url'=>array('view', 'id'=>$model->id)),
	
);
?>

<h1>Update Replacement <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>