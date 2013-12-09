<?php
/* @var $this Rh1ValuesController */
/* @var $model Rh1Values */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rh1-values-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_rh1'); ?>
		<?php echo $form->textField($model,'id_tbl_rh1'); ?>
		<?php echo $form->error($model,'id_tbl_rh1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'month'); ?>
		<?php echo $form->textField($model,'month',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'month'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'landfill_ordinary'); ?>
		<?php echo $form->textField($model,'landfill_ordinary',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'landfill_ordinary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'landfill_idrs'); ?>
		<?php echo $form->textField($model,'landfill_idrs',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'landfill_idrs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recycling_recyclable'); ?>
		<?php echo $form->textField($model,'recycling_recyclable',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'recycling_recyclable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recycling_idr'); ?>
		<?php echo $form->textField($model,'recycling_idr',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'recycling_idr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_waste_not_hazardous'); ?>
		<?php echo $form->textField($model,'total_waste_not_hazardous',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'total_waste_not_hazardous'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hef_biosanitary'); ?>
		<?php echo $form->textField($model,'hef_biosanitary',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'hef_biosanitary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hef_sharps'); ?>
		<?php echo $form->textField($model,'hef_sharps',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'hef_sharps'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hef_idd'); ?>
		<?php echo $form->textField($model,'hef_idd',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'hef_idd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incineration_sharps'); ?>
		<?php echo $form->textField($model,'incineration_sharps',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'incineration_sharps'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incineration_pathological'); ?>
		<?php echo $form->textField($model,'incineration_pathological',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'incineration_pathological'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incineration_chemical'); ?>
		<?php echo $form->textField($model,'incineration_chemical',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'incineration_chemical'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incineration_other_residues'); ?>
		<?php echo $form->textField($model,'incineration_other_residues',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'incineration_other_residues'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'incineration_idi'); ?>
		<?php echo $form->textField($model,'incineration_idi',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'incineration_idi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ots_other_residues'); ?>
		<?php echo $form->textField($model,'ots_other_residues',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'ots_other_residues'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ots_chemical_reactives'); ?>
		<?php echo $form->textField($model,'ots_chemical_reactives',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'ots_chemical_reactives'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ots_idos'); ?>
		<?php echo $form->textField($model,'ots_idos',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'ots_idos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_waste_hazardous'); ?>
		<?php echo $form->textField($model,'total_waste_hazardous',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'total_waste_hazardous'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->