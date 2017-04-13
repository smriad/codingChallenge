<?php
/* @var $this VehicletitlesController */
/* @var $model Vehicletitles */

$this->breadcrumbs=array(
	'Offerings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Offerings List', 'url'=>array('index')),
	array('label'=>'Manage Offerings', 'url'=>array('admin')),
);
?>

<h4>New Offering</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>