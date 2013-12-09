<?php
/* @var $this Rh1ValuesController */
/* @var $model Rh1Values */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_rh1_values'); ?>
		<?php echo $form->textField($model,'id_tbl_rh1_values'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tbl_rh1'); ?>
		<?php echo $form->textField($model,'id_tbl_rh1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'month'); ?>
		<?php echo $form->textField($model,'month',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'landfill_ordinary'); ?>
		<?php echo $form->textField($model,'landfill_ordinary',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'landfill_idrs'); ?>
		<?php echo $form->textField($model,'landfill_idrs',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recycling_recyclable'); ?>
		<?php echo $form->textField($model,'recycling_recyclable',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recycling_idr'); ?>
		<?php echo $form->textField($model,'recycling_idr',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_waste_not_hazardous'); ?>
		<?php echo $form->textField($model,'total_waste_not_hazardous',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hef_biosanitary'); ?>
		<?php echo $form->textField($model,'hef_biosanitary',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hef_sharps'); ?>
		<?php echo $form->textField($model,'hef_sharps',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hef_idd'); ?>
		<?php echo $form->textField($model,'hef_idd',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incineration_sharps'); ?>
		<?php echo $form->textField($model,'incineration_sharps',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incineration_pathological'); ?>
		<?php echo $form->textField($model,'incineration_pathological',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incineration_chemical'); ?>
		<?php echo $form->textField($model,'incineration_chemical',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incineration_other_residues'); ?>
		<?php echo $form->textField($model,'incineration_other_residues',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'incineration_idi'); ?>
		<?php echo $form->textField($model,'incineration_idi',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ots_other_residues'); ?>
		<?php echo $form->textField($model,'ots_other_residues',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ots_chemical_reactives'); ?>
		<?php echo $form->textField($model,'ots_chemical_reactives',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ots_idos'); ?>
		<?php echo $form->textField($model,'ots_idos',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_waste_hazardous'); ?>
		<?php echo $form->textField($model,'total_waste_hazardous',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->