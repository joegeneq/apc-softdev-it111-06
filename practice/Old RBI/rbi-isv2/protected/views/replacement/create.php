<?php
/* @var $this ReplacementController */
/* @var $model Replacement */

$this->breadcrumbs=array(
	'Replacements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Replacements List', 'url'=>array('index')),
	array('label'=>'Manage Replacement', 'url'=>array('admin')),
);
?>

<h1>Create Replacement</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>