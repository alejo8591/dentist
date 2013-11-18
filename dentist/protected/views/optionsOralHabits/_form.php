<?php
/* @var $this OptionsOralHabitsController */
/* @var $model OptionsOralHabits */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'options-oral-habits-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_personal_background'); ?>
		<?php echo $form->textField($model,'id_tbl_personal_background'); ?>
		<?php echo $form->error($model,'id_tbl_personal_background'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_option_oral_habits'); ?>
		<?php echo $form->textField($model,'name_option_oral_habits',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name_option_oral_habits'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flag_option_oral_habits'); ?>
		<?php echo $form->textField($model,'flag_option_oral_habits'); ?>
		<?php echo $form->error($model,'flag_option_oral_habits'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observation_option_oral_habits'); ?>
		<?php echo $form->textArea($model,'observation_option_oral_habits',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observation_option_oral_habits'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->