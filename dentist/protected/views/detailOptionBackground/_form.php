<?php
/* @var $this DetailOptionBackgroundController */
/* @var $model DetailOptionBackground */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detail-option-background-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_option_background'); ?>
		<?php echo $form->textField($model,'id_tbl_option_background'); ?>
		<?php echo $form->error($model,'id_tbl_option_background'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_detail_option_background'); ?>
		<?php echo $form->textField($model,'name_detail_option_background',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'name_detail_option_background'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flag_detail_option_background'); ?>
		<?php echo $form->textField($model,'flag_detail_option_background'); ?>
		<?php echo $form->error($model,'flag_detail_option_background'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->