<?php
/* @var $this VehicletypesController */
/* @var $model Vehicletypes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vehicletypes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate_per_km'); ?>
		<?php echo $form->textField($model,'rate_per_km'); ?>
		<?php echo $form->error($model,'rate_per_km'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate_per_km_personal'); ?>
		<?php echo $form->textField($model,'rate_per_km_personal'); ?>
		<?php echo $form->error($model,'rate_per_km_personal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rate_per_km_external'); ?>
		<?php echo $form->textField($model,'rate_per_km_external'); ?>
		<?php echo $form->error($model,'rate_per_km_external'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->textField($model,'active'); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<!--div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div-->
	
	<div class="clearfix"></div>
	
	<div align="left">
    <?php $this->widget('bootstrap.widgets.TbButton',array(
        'label' => 'Save',
        'type' => 'primary',
        'buttonType'=>'submit', 
        'size' => 'medium'
        ));
    ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->