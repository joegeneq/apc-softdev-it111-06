<?php
/* @var $this ReplacementDetailController */
/* @var $model ReplacementDetail */

$this->breadcrumbs=array(
'Replacements'=>array('/replacement'),
	'Replacement Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Replacement Details List', 'url'=>array('index')),
	array('label'=>'Manage Replacement Details', 'url'=>array('admin')),
);
?>

<h1>Create ReplacementDetail</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>