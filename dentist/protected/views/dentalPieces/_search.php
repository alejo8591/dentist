<?php
/* @var $this DentalPiecesController */
/* @var $model DentalPieces */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_dental_piece'); ?>
		<?php echo $form->textField($model,'id_tbl_dental_piece'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_dental_examination'); ?>
		<?php echo $form->textField($model,'id_tbl_dental_examination'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'number_dental_piece'); ?>
		<?php echo $form->textField($model,'number_dental_piece'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'state_dental_piece'); ?>
		<?php echo $form->textField($model,'state_dental_piece',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'flag_dental_piece'); ?>
		<?php echo $form->textField($model,'flag_dental_piece'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type_dental_piece'); ?>
		<?php echo $form->textField($model,'type_dental_piece',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observation_dental_piece'); ?>
		<?php echo $form->textArea($model,'observation_dental_piece',array('rows'=>6, 'cols'=>50)); ?>
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