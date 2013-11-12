<?php
/* @var $this AnamnesisController */
/* @var $model Anamnesis */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'anamnesis-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'surname'); ?>
		<?php echo $form->textField($model,'surname',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_birth'); ?>
		<?php echo $form->textField($model,'date_birth'); ?>
		<?php echo $form->error($model,'date_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'place_of_birth'); ?>
		<?php echo $form->textField($model,'place_of_birth',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'place_of_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genre'); ?>
		<?php echo $form->textField($model,'genre'); ?>
		<?php echo $form->error($model,'genre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blood_group'); ?>
		<?php echo $form->textField($model,'blood_group'); ?>
		<?php echo $form->error($model,'blood_group'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_country'); ?>
		<?php echo $form->textField($model,'id_tbl_country'); ?>
		<?php echo $form->error($model,'id_tbl_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_city'); ?>
		<?php echo $form->textField($model,'id_tbl_city'); ?>
		<?php echo $form->error($model,'id_tbl_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_level_schooling'); ?>
		<?php echo $form->textField($model,'id_tbl_level_schooling'); ?>
		<?php echo $form->error($model,'id_tbl_level_schooling'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_profession'); ?>
		<?php echo $form->textField($model,'id_tbl_profession'); ?>
		<?php echo $form->error($model,'id_tbl_profession'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'occupation'); ?>
		<?php echo $form->textField($model,'occupation',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'occupation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact'); ?>
		<?php echo $form->textField($model,'contact',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_healt_regimen'); ?>
		<?php echo $form->textField($model,'id_tbl_healt_regimen'); ?>
		<?php echo $form->error($model,'id_tbl_healt_regimen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_healt_institution'); ?>
		<?php echo $form->textField($model,'id_tbl_healt_institution'); ?>
		<?php echo $form->error($model,'id_tbl_healt_institution'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description_healt'); ?>
		<?php echo $form->textArea($model,'description_healt',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description_healt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'family_history'); ?>
		<?php echo $form->textArea($model,'family_history',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'family_history'); ?>
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