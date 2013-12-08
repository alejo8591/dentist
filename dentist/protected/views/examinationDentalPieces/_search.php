<?php
/* @var $this ExaminationDentalPiecesController */
/* @var $model ExaminationDentalPieces */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_examination_dental_pieces'); ?>
		<?php echo $form->textField($model,'id_tbl_examination_dental_pieces'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_dental_piece'); ?>
		<?php echo $form->textField($model,'id_tbl_dental_piece'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_examination_dental_pieces'); ?>
		<?php echo $form->textField($model,'name_examination_dental_pieces',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type_examination_dental_pieces'); ?>
		<?php echo $form->textField($model,'type_examination_dental_pieces'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observation_examination_dental_pieces'); ?>
		<?php echo $form->textArea($model,'observation_examination_dental_pieces',array('rows'=>6, 'cols'=>50)); ?>
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
		<?php echo $form->label($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->