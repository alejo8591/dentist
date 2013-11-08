<?php
/* @var $this LevelSchoolingController */
/* @var $model LevelSchooling */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_level_schooling'); ?>
		<?php echo $form->textField($model,'id_tbl_level_schooling'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_level_schooling'); ?>
		<?php echo $form->textField($model,'name_level_schooling',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->