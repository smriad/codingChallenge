<?php
/* @var $this VehicletypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Purchases',
);

$this->menu=array(
	array('label'=>'New Purchase', 'url'=>array('create')),
	array('label'=>'Manage Purchases', 'url'=>array('admin')),
);
?>

<h4>Purchases</h4>

<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));*/ ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'vehicletypes-grid',
    'dataProvider'=>$dataProvider,
    'filter'=>$model,
    'columns'=>array(
        'id',
        array(
            'name' => 'type',
            'type'=>'raw',
            'value' => 'CHtml::link(CHtml::encode($data->type),array("view","id"=>$data->id))',
        ),
        'rate_per_km',
        'rate_per_km_personal',
        'rate_per_km_external',
    ),
)); ?>