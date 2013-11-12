<?php
/* @var $this OptionsPersonalBackgroundController */
/* @var $model OptionsPersonalBackground */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_option_personal_background'); ?>
		<?php echo $form->textField($model,'id_tbl_option_personal_background'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_personal_background'); ?>
		<?php echo $form->textField($model,'id_tbl_personal_background'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_option_personal_background'); ?>
		<?php echo $form->textField($model,'name_option_personal_background',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flag_option_personal_background'); ?>
		<?php echo $form->textField($model,'flag_option_personal_background'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observation_option_personal_background'); ?>
		<?php echo $form->textArea($model,'observation_option_personal_background',array('rows'=>6, 'cols'=>50)); ?>
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