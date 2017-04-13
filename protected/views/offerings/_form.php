<?php
/* @var $this VehicletitlesController */
/* @var $model Vehicletitles */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'purchage-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
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