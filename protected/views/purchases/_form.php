<?php
/* @var $this VehiclecustomerNamesController */
/* @var $model VehiclecustomerNames */
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
		<?php echo $form->labelEx($model,'customerName'); ?>
		<?php echo $form->textField($model,'customerName',array('size'=>60,'maxlength'=>127)); ?>
		<?php echo $form->error($model,'customerName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'offeringID'); ?>
		<?php echo $form->textField($model,'offeringID'); ?>
		<?php echo $form->error($model,'offeringID'); ?>
	</div>
    <div class="row">
        <?php echo $form->labelEx($model,'offeringID'); ?>
        <?php //echo $form->textField($model,'dept_name',array('size'=>60,'maxlength'=>127)); ?>
        <?php $offerings = Offerings::model()->findAll(array('select'=>'id,title'));
        echo $form->dropDownList($model,'offeringID', CHtml::listData($offerings,'title',  'title'),array('empty' => 'Select Offerings...')); ?>

        <?php echo $form->error($model,'offeringID'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
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