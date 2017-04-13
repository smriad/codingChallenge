<?php
/* @var $this VehicletypesController */
/* @var $model Vehicletypes */

$this->breadcrumbs=array(
	'Purchases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Purchases List', 'url'=>array('index')),
	array('label'=>'New Purchase', 'url'=>array('create')),
	array('label'=>'Update Purchase', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Vehicletype', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?','csrf' => true)),
	array('label'=>'Manage Purchases', 'url'=>array('admin')),
);
?>

<h4>View Purchase : <?php echo $model->id; ?></h4>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
		'rate_per_km',
		'rate_per_km_personal',
		'rate_per_km_external',
		//'active',
	),
)); ?>
