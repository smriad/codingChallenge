<?php
/* @var $this VehicletypesController */
/* @var $model Vehicletypes */

$this->breadcrumbs=array(
	'Purchases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Purchases List', 'url'=>array('index')),
	array('label'=>'New Purchase', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('vehicletypes-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h4>Manage Purchases</h4>

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
	'id'=>'vehicletypes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'type',
		'rate_per_km',
		'rate_per_km_personal',
		'rate_per_km_external',
		'active',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
