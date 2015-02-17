<?php
/* @var $this ItemQtyController */
/* @var $model ItemQty */

$this->breadcrumbs=array(
	'Items'=>array('/item'),
	'Item Supplies'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Item Supplies List', 'url'=>array('index')),
	array('label'=>'Add Item Supply', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#item-qty-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Item Qties</h1>

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
	'id'=>'item-qty-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array('name'=>'item_id', 'header'=>'Item Description', 'value'=>'$data->item->item_description'),
		'item_qty_date',
		'item_qty_new',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
