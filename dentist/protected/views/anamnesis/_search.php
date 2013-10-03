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
		<?php echo $form->label($model,'id_tbl_user'); ?>
		<?php echo $form->textField($model,'id_tbl_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'surname'); ?>
		<?php echo $form->textField($model,'surname',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_birth'); ?>
		<?php echo $form->textField($model,'date_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'place_of_birth'); ?>
		<?php echo $form->textField($model,'place_of_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'genre'); ?>
		<?php echo $form->textField($model,'genre',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blood_group'); ?>
		<?php echo $form->textField($model,'blood_group',array('size'=>4,'maxlength'=>4)); ?>
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
		<?php echo $form->textField($model,'contact'); ?>
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
		<?php echo $form->label($model,'id_tbl_during_consultation'); ?>
		<?php echo $form->textField($model,'id_tbl_during_consultation'); ?>
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
		<?php echo $form->label($model,'data_personal_history'); ?>
		<?php echo $form->textArea($model,'data_personal_history',array('rows'=>6, 'cols'=>50)); ?>
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