<?php
/* @var $this VehicletitlesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Offerings',
);

$this->menu=array(
	array('label'=>'New Offering', 'url'=>array('create')),
	array('label'=>'Manage Offerings', 'url'=>array('admin')),
);
?>

<h4>Offerings</h4>

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
            'name' => 'title',

        ),
        'price',


    ),
)); ?>