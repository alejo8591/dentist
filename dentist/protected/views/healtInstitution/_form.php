<?php
/* @var $this HealtInstitutionController */
/* @var $model HealtInstitution */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'healt-institution-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con el <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_healt_regimen'); ?>
		<?php echo $form->dropDownList($model,'id_tbl_healt_regimen', $model->getHealtRegimenes()); ?>
		<?php echo $form->error($model,'id_tbl_healt_regimen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_healt_institution'); ?>
		<?php echo $form->textField($model,'name_healt_institution',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name_healt_institution'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_healt_institution'); ?>
		<?php echo $form->textField($model,'id_healt_institution',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'id_healt_institution'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->