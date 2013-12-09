<?php
/* @var $this RipsProceduresController */
/* @var $model RipsProcedures */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_rips_procedures'); ?>
		<?php echo $form->textField($model,'id_tbl_rips_procedures'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_rips'); ?>
		<?php echo $form->textField($model,'id_tbl_rips'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'value_procedure'); ?>
		<?php echo $form->textField($model,'value_procedure',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cie10_code'); ?>
		<?php echo $form->textField($model,'cie10_code',array('size'=>60,'maxlength'=>128)); ?>
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