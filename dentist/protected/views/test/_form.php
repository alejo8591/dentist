<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'test-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<p class="note">Fields with <span class="required">*</span> are required.</p>
 <?php echo $form->errorSummary(array($address, $city)); ?>

   <div class="row">
		<?php echo $form->labelEx($city,'id_tbl_country'); ?>
		<?php echo $form->textField($city,'id_tbl_country'); ?>
		<?php echo $form->error($city,'id_tbl_country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($city,'city_code'); ?>
		<?php echo $form->textField($city,'city_code'); ?>
		<?php echo $form->error($city,'city_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($city,'name_city'); ?>
		<?php echo $form->textField($city,'name_city',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($city,'name_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($city,'postal_code'); ?>
		<?php echo $form->textField($city,'postal_code',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($city,'postal_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($city,'description'); ?>
		<?php echo $form->textArea($city,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($city,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($address,'id_tbl_user'); ?>
		<?php echo $form->textField($address,'id_tbl_user'); ?>
		<?php echo $form->error($address,'id_tbl_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($address,'id_tbl_anamnesis'); ?>
		<?php echo $form->textField($address,'id_tbl_anamnesis'); ?>
		<?php echo $form->error($address,'id_tbl_anamnesis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($address,'type_address'); ?>
		<?php echo $form->dropDownList($address,'type_address', $address->getTypeAddresses()); ?>
		<?php echo $form->error($address,'type_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($address,'address'); ?>
		<?php echo $form->textField($address,'address',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($address,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($address,'description'); ?>
		<?php echo $form->textArea($address,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($address,'description'); ?>
	</div>

 	<h1>TABLA 2</h1>

 	<div class="row">
		<?php echo $form->labelEx($address,'id_tbl_user'); ?>
		<?php echo $form->textField($address,'id_tbl_user'); ?>
		<?php echo $form->error($address,'id_tbl_user'); ?>
	</div>

 	<div class="row">
		<?php echo $form->labelEx($address,'id_tbl_anamnesis'); ?>
		<?php echo $form->textField($address,'id_tbl_anamnesis'); ?>
		<?php echo $form->error($address,'id_tbl_anamnesis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($address,'type_address'); ?>
		<?php echo $form->dropDownList($address,'type_address', $address->getTypeAddresses()); ?>
		<?php echo $form->error($address,'type_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($address,'address'); ?>
		<?php echo $form->textField($address,'address',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($address,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($address,'description'); ?>
		<?php echo $form->textArea($address,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($address,'description'); ?>
	</div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($address->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->