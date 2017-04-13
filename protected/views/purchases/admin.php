<?php
/* @var $this VehiclecustomerNamesController */
/* @var $model VehiclecustomerNames */

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
	$.fn.yiiGridView.update('vehiclecustomerNames-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h4>Manage Purchases</h4>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vehiclecustomerNames-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'customerName',
		'offeringID',
		'quantity',
		array(
			'class'=>'CButtonColumn',

            'template' => '{update}{view}'
		),
	),
)); ?>
