<?php
/* @var $this VehiclecustomerNamesController */
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

    'dataProvider'=>$dataProvider,
    'filter'=>$model,
    'columns'=>array(
        'id',
        array(
            'name' => 'customerName',

        ),
        'offeringID',
        'quantity',

    ),
)); ?>