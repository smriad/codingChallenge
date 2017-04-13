<?php
/* @var $this VehicletitlesController */
/* @var $model Vehicletitles */

$this->breadcrumbs=array(
	'Offerings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Offerings List', 'url'=>array('index')),
	array('label'=>'New Offering', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('vehicletitles-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h4>Manage Offerings</h4>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vehicletitles-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'price',

		array(
			'class'=>'CButtonColumn',

            'template' => '{update}{view}'
		),
	),
)); ?>
