<?php
/* @var $this CityController */
/* @var $model City */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_city'); ?>
		<?php echo $form->textField($model,'id_tbl_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_country'); ?>
		<?php echo $form->textField($model,'id_tbl_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city_code'); ?>
		<?php echo $form->textField($model,'city_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_city'); ?>
		<?php echo $form->textField($model,'name_city',array('size'=>60,'maxlength'=>128)); ?>
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