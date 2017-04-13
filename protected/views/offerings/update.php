<?php
/* @var $this VehicletitlesController */
/* @var $model Vehicletitles */

$this->breadcrumbs=array(
	'Offerings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Offerings List', 'url'=>array('index')),
	array('label'=>'New Offering', 'url'=>array('create')),
	array('label'=>'View Offering', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Offerings', 'url'=>array('admin')),
);
?>

<h4>Update Offering : <?php echo $model->id; ?></h4>

<?php //echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php echo $this->renderPartial('_formU', array('model'=>$model)); ?>