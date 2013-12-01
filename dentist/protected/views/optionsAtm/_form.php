<?php
/* @var $this OptionsAtmController */
/* @var $model OptionsAtm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'options-atm-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name_option_atm'); ?>
		<?php echo $form->textField($model,'name_option_atm',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name_option_atm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flag_option_atm'); ?>
		<?php echo $form->textField($model,'flag_option_atm'); ?>
		<?php echo $form->error($model,'flag_option_atm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observation_atm'); ?>
		<?php echo $form->textArea($model,'observation_atm',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observation_atm'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->