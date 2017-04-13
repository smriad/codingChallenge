<?php
/* @var $this VehiclecustomerNamesController */
/* @var $model VehiclecustomerNames */

$this->breadcrumbs=array(
	'Purchases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Purchases List', 'url'=>array('index')),
	array('label'=>'New Purchase', 'url'=>array('create')),
	array('label'=>'Update Purchase', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete VehiclecustomerName', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?','csrf' => true)),
	array('label'=>'Manage Purchases', 'url'=>array('admin')),
);
?>

<h4>View Purchase : <?php echo $model->id; ?></h4>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'customerName',
		'offeringID',
		'quantity',

		//'active',
	),
)); ?>
