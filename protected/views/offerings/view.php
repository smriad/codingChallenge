<?php
/* @var $this VehicletitlesController */
/* @var $model Vehicletitles */

$this->breadcrumbs=array(
	'Offerings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Offerings List', 'url'=>array('index')),
	array('label'=>'New Offering', 'url'=>array('create')),
	array('label'=>'Update Offering', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Vehicletitle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?','csrf' => true)),
	array('label'=>'Manage Offerings', 'url'=>array('admin')),
);
?>

<h4>View Offering : <?php echo $model->id; ?></h4>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'price',


		//'active',
	),
)); ?>
