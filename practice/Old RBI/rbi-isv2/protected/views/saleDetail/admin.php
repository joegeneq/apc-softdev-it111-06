<?php
/* @var $this SaleDetailController */
/* @var $model SaleDetail */

$this->breadcrumbs=array(
	'Sales'=>array('/sale'),
	'Sale Details'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Sale Details List', 'url'=>array('index')),
	array('label'=>'Create SaleDetail', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sale-detail-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sale Details</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sale-detail-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'sale_id',
		array('name'=>'sale_id', 'header'=>'Sale', 'value'=>'$data->sale->sale_officialreceipt_no'),
		//'item_id',
		array('name'=>'item_id', 'header'=>'Item', 'value'=>'$data->item->item_description'),
		'sale_quantity',
		'sale_discount',
		'sale_price',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
