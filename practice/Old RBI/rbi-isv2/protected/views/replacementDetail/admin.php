<?php
/* @var $this ReplacementDetailController */
/* @var $model ReplacementDetail */

$this->breadcrumbs=array(
'Replacements'=>array('/replacement'),
	'Replacement Details'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Replacement Details List', 'url'=>array('index')),
	//array('label'=>'Create ReplacementDetail', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#replacement-detail-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Replacement Details</h1>

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
	'id'=>'replacement-detail-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'replacement_id',
		array('name'=>'item_for_replacement_id', 'header'=>'Item For Replacement', 'value'=>'$data->itemForReplacement->item_description'),
		array('name'=>'item_stocks_for_repl_id', 'header'=>'Item Stocks For Replacement', 'value'=>'$data->itemStocksForRepl->item_stocks_serial_no'),
		array('name'=>'item_replaced_id', 'header'=>'Item Replaced', 'value'=>'$data->itemReplaced->item_description'),
		array('name'=>'item_stocks_replaced_id', 'header'=>'Item Stocks Replaced', 'value'=>'$data->itemStocksReplaced->item_stocks_serial_no'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
