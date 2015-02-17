<?php
/* @var $this ReplacementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Replacements',
);

$this->menu=array(
	array('label'=>'Create Replacement', 'url'=>array('create')),
	array('label'=>'Manage Replacements', 'url'=>array('admin')),
	array('label'=>'Replacement Details List', 'url'=>array('/replacementDetail')),
);
?>

<h1>Replacements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
