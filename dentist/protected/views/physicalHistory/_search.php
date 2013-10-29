<?php
/* @var $this PhysicalHistoryController */
/* @var $model PhysicalHistory */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_physical_history'); ?>
		<?php echo $form->textField($model,'id_tbl_physical_history'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tbl_physical_historycol'); ?>
		<?php echo $form->textField($model,'tbl_physical_historycol',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_anamnesis'); ?>
		<?php echo $form->textField($model,'id_tbl_anamnesis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tbl_physical_historycol1'); ?>
		<?php echo $form->textField($model,'tbl_physical_historycol1',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->