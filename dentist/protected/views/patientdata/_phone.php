<?php $form=$this->beginWidget('CActiveForm', array(
   'id'=>'patienDataController-form',
   // Please note: When you enable ajax validation, make sure the corresponding
   // controller action is handling ajax validation correctly.
   // There is a call to performAjaxValidation() commented in generated controller code.
   // See class documentation of CActiveForm for details on this.
   'enableAjaxValidation'=>false,
)); ?>

<p class="note">Campos con el <span class="required">*</span> son obligatorios.</p>
<?php echo $form->errorSummary($phones); ?>

<li>
 <div class="row">
    <?php echo $form->labelEx($phones, "type_phone"); ?>
    <?php echo $form->textField($phones, "type_phone"); ?>
    <?php echo $form->error($phones,'type_phone'); ?>
 </div>
 <div class="row">
    <?php echo $form->labelEx($phones, "phone"); ?>
    <?php echo $form->textField($phones, "phone"); ?>
    <?php echo $form->error($phones,'phone'); ?>
 </div> 
 <div class="row">
    <?php echo $form->labelEx($phones, "phone_extension"); ?>
    <?php echo $form->textField($phones, "phone_extension"); ?>
    <?php echo $form->error($phones,'phone_extension'); ?>
 </div> 
 <div class="row">
    <?php echo $form->labelEx($phones, "description"); ?>
    <?php echo $form->textField($phones, "description"); ?>
    <?php echo $form->error($phones,'description'); ?>
 </div> 
</li>
<?php $this->endWidget(); ?>