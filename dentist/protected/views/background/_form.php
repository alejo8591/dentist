<?php
/* @var $this BackgroundController */
/* @var $model Background */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'background-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_personal_history'); ?>
		<?php echo $form->textField($model,'id_tbl_personal_history'); ?>
		<?php echo $form->error($model,'id_tbl_personal_history'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_background'); ?>
		<?php echo $form->textField($model,'name_background',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'name_background'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<!-- <?php echo $form->labelEx($model,'create_user_id'); ?> -->
		<?php echo $form->hiddenField($model,'create_user_id'); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<!-- <?php echo $form->labelEx($model,'create_time'); ?> -->
		<?php echo $form->hiddenField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<!-- <?php echo $form->labelEx($model,'update_user_id'); ?> -->
		<?php echo $form->hiddenField($model,'update_user_id'); ?>
		<?php echo $form->error($model,'update_user_id'); ?>
	</div>

	<div class="row">
		<!-- <?php echo $form->labelEx($model,'update_time'); ?> -->
		<?php echo $form->hiddenField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->