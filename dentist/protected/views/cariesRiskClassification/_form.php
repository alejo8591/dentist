<?php
/* @var $this CariesRiskClassificationController */
/* @var $model CariesRiskClassification */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'caries-risk-classification-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_caries_risk_classification'); ?>
		<?php echo $form->textField($model,'id_tbl_caries_risk_classification'); ?>
		<?php echo $form->error($model,'id_tbl_caries_risk_classification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_dental_examination'); ?>
		<?php echo $form->textField($model,'id_tbl_dental_examination'); ?>
		<?php echo $form->error($model,'id_tbl_dental_examination'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_caries_risk_classification'); ?>
		<?php echo $form->textField($model,'name_caries_risk_classification',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'name_caries_risk_classification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observation_caries_risk_classification'); ?>
		<?php echo $form->textArea($model,'observation_caries_risk_classification',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observation_caries_risk_classification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'score_caries_risk_classification'); ?>
		<?php echo $form->textField($model,'score_caries_risk_classification',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'score_caries_risk_classification'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_sector_caries_risk_classification'); ?>
		<?php echo $form->textField($model,'total_sector_caries_risk_classification',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'total_sector_caries_risk_classification'); ?>
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