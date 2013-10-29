<?php
/* @var $this PhysicalHistoryController */
/* @var $model PhysicalHistory */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'physical-history-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tbl_physical_historycol'); ?>
		<?php echo $form->textField($model,'tbl_physical_historycol',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tbl_physical_historycol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_anamnesis'); ?>
		<?php echo $form->textField($model,'id_tbl_anamnesis'); ?>
		<?php echo $form->error($model,'id_tbl_anamnesis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tbl_physical_historycol1'); ?>
		<?php echo $form->textField($model,'tbl_physical_historycol1',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tbl_physical_historycol1'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->