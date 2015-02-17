<?php
/* @var $this ItemStocksController */
/* @var $model ItemStocks */
require_once "function.php";

$this->breadcrumbs=array(
'Items'=>array('/item'),
	'Item Stocks'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Item Stocks List', 'url'=>array('index')),
	array('label'=>'Add Item Stock', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#item-stocks-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Item Stocks</h1>

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
	'id'=>'item-stocks-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'item_stocks_serial_no',
		'item_stocks_defective_status',
		array('name'=>'item_id', 'header'=>'Item', 'value'=>'$data->item->item_description'),
		array('name'=>'sale_detail_id', 'header'=>'Sale Official Receipt No','value'=>'getSerial($data->sale_detail_id)'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
