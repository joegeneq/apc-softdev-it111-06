<?php
/* @var $this CompanyController */
/* @var $model Company */

$this->breadcrumbs=array(
	'Companies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Companies List', 'url'=>array('index')),
	array('label'=>'Manage Companies', 'url'=>array('admin')),
	array('label'=>'Create Company', 'url'=>array('create')),
	array('label'=>'View Company', 'url'=>array('view', 'id'=>$model->id)),
	
);
?>

<h1>Update Company <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>