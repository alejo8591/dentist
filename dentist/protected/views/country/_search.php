<?php
/* @var $this CountryController */
/* @var $model Country */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_country'); ?>
		<?php echo $form->textField($model,'id_tbl_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country_code'); ?>
		<?php echo $form->textField($model,'country_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_country'); ?>
		<?php echo $form->textField($model,'name_country',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'postal_code'); ?>
		<?php echo $form->textField($model,'postal_code',array('size'=>60,'maxlength'=>128)); ?>
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