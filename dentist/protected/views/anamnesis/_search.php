<?php
/* @var $this AnamnesisController */
/* @var $model Anamnesis */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_anamnesis'); ?>
		<?php echo $form->textField($model,'id_tbl_anamnesis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'middle_name'); ?>
		<?php echo $form->textField($model,'middle_name',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paternal_surname'); ?>
		<?php echo $form->textField($model,'paternal_surname',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mothers_maiden_name'); ?>
		<?php echo $form->textField($model,'mothers_maiden_name',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_birth'); ?>
		<?php echo $form->textField($model,'date_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place_of_birth'); ?>
		<?php echo $form->textField($model,'place_of_birth',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'age'); ?>
		<?php echo $form->textField($model,'age'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'genre'); ?>
		<?php echo $form->textField($model,'genre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blood_group'); ?>
		<?php echo $form->textField($model,'blood_group'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_country'); ?>
		<?php echo $form->textField($model,'id_tbl_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_city'); ?>
		<?php echo $form->textField($model,'id_tbl_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'locality'); ?>
		<?php echo $form->textField($model,'locality',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_level_schooling'); ?>
		<?php echo $form->textField($model,'id_tbl_level_schooling'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_profession'); ?>
		<?php echo $form->textField($model,'id_tbl_profession'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'occupation'); ?>
		<?php echo $form->textField($model,'occupation',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contact'); ?>
		<?php echo $form->textField($model,'contact',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_healt_regimen'); ?>
		<?php echo $form->textField($model,'id_tbl_healt_regimen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_healt_institution'); ?>
		<?php echo $form->textField($model,'id_tbl_healt_institution'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description_healt'); ?>
		<?php echo $form->textArea($model,'description_healt',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'family_history'); ?>
		<?php echo $form->textArea($model,'family_history',array('rows'=>6, 'cols'=>50)); ?>
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