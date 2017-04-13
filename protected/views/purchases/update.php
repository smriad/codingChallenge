<?php
/* @var $this VehiclecustomerNamesController */
/* @var $model VehiclecustomerNames */

$this->breadcrumbs=array(
	'Purchases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Purchases List', 'url'=>array('index')),
	array('label'=>'New Purchase', 'url'=>array('create')),
	array('label'=>'View Purchase', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Purchases', 'url'=>array('admin')),
);
?>

<h4>Update Purchase : <?php echo $model->id; ?></h4>

<?php //echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php echo $this->renderPartial('_formU', array('model'=>$model)); ?>