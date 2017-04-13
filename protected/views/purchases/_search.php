<?php
/* @var $this VehiclecustomerNamesController */
/* @var $model VehiclecustomerNames */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customerName'); ?>
		<?php echo $form->textField($model,'customerName',array('size'=>60,'maxlength'=>127)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'offeringID'); ?>
		<?php echo $form->textField($model,'offeringID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->