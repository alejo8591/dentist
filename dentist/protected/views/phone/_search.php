<?php
/* @var $this PhoneController */
/* @var $model Phone */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_phone'); ?>
		<?php echo $form->textField($model,'id_tbl_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_user'); ?>
		<?php echo $form->textField($model,'id_tbl_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_anamnesis'); ?>
		<?php echo $form->textField($model,'id_tbl_anamnesis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type_phone'); ?>
		<?php echo $form->textField($model,'type_phone',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone_extension'); ?>
		<?php echo $form->textField($model,'phone_extension',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id'); ?>
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