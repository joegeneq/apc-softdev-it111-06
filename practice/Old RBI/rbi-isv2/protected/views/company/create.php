<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Companies List', 'url'=>array('index')),
	array('label'=>'Manage Companies', 'url'=>array('admin')),
);
?>

<h1>Create Company</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>