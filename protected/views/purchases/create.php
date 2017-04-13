<?php
/* @var $this VehiclecustomerNamesController */
/* @var $model VehiclecustomerNames */

$this->breadcrumbs=array(
	'Purchases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Purchases List', 'url'=>array('index')),
	array('label'=>'Manage Purchases', 'url'=>array('admin')),
);
?>

<h4>New Purchase</h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>