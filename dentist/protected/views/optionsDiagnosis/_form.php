<?php
/* @var $this OptionsDiagnosisController */
/* @var $model OptionsDiagnosis */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'options-diagnosis-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_option_diagnosis'); ?>
		<?php echo $form->textField($model,'id_tbl_option_diagnosis'); ?>
		<?php echo $form->error($model,'id_tbl_option_diagnosis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_diagnosis'); ?>
		<?php echo $form->textField($model,'id_tbl_diagnosis'); ?>
		<?php echo $form->error($model,'id_tbl_diagnosis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_option_diagnosis'); ?>
		<?php echo $form->textField($model,'name_option_diagnosis',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name_option_diagnosis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_option_diagnosis'); ?>
		<?php echo $form->textField($model,'type_option_diagnosis'); ?>
		<?php echo $form->error($model,'type_option_diagnosis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observation_option_diagnosis'); ?>
		<?php echo $form->textField($model,'observation_option_diagnosis',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'observation_option_diagnosis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'update_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->