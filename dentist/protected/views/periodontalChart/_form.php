<?php
/* @var $this PeriodontalChartController */
/* @var $model PeriodontalChart */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'periodontal-chart-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'observations_periodontal_chart'); ?>
		<?php echo $form->textArea($model,'observations_periodontal_chart',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observations_periodontal_chart'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'flag_option_periodontal_chart'); ?>
		<?php echo $form->textField($model,'flag_option_periodontal_chart'); ?>
		<?php echo $form->error($model,'flag_option_periodontal_chart'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->