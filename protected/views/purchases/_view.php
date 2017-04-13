<?php
/* @var $this VehiclecustomerNamesController */
/* @var $data VehiclecustomerNames */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customerName')); ?>:</b>
	<?php echo CHtml::encode($data->customerName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offeringID')); ?>:</b>
	<?php echo CHtml::encode($data->offeringID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />


	<br />


</div>