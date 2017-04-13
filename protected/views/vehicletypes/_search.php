<?php
/* @var $this VehicletypesController */
/* @var $model Vehicletypes */
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
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>60,'maxlength'=>127)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rate_per_km'); ?>
		<?php echo $form->textField($model,'rate_per_km'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rate_per_km_personal'); ?>
		<?php echo $form->textField($model,'rate_per_km_personal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rate_per_km_external'); ?>
		<?php echo $form->textField($model,'rate_per_km_external'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'active'); ?>
		<?php echo $form->textField($model,'active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->