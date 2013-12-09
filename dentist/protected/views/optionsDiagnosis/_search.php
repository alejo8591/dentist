<?php
/* @var $this OptionsDiagnosisController */
/* @var $model OptionsDiagnosis */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_option_diagnosis'); ?>
		<?php echo $form->textField($model,'id_tbl_option_diagnosis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_diagnosis'); ?>
		<?php echo $form->textField($model,'id_tbl_diagnosis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_option_diagnosis'); ?>
		<?php echo $form->textField($model,'name_option_diagnosis',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type_option_diagnosis'); ?>
		<?php echo $form->textField($model,'type_option_diagnosis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observation_option_diagnosis'); ?>
		<?php echo $form->textField($model,'observation_option_diagnosis',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->