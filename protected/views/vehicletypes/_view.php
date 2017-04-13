<?php
/* @var $this VehicletypesController */
/* @var $data Vehicletypes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_per_km')); ?>:</b>
	<?php echo CHtml::encode($data->rate_per_km); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_per_km_personal')); ?>:</b>
	<?php echo CHtml::encode($data->rate_per_km_personal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rate_per_km_external')); ?>:</b>
	<?php echo CHtml::encode($data->rate_per_km_external); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />


</div>