<div class="form">
   <?php 
      Yii::app()->clientScript->registerCoreScript('jquery');
      $form=$this->beginWidget('CActiveForm', array(
      'id'=>'patienDataController-form',
      // Please note: When you enable ajax validation, make sure the corresponding
      // controller action is handling ajax validation correctly.
      // There is a call to performAjaxValidation() commented in generated controller code.
      // See class documentation of CActiveForm for details on this.
      'enableAjaxValidation'=>false,
   )); ?>

   <p class="note">Campos con el <span class="required">*</span> son obligatorios.</p>

   <?php echo $form->errorSummary($phones); ?>
   
   
   <?php echo CHtml::link('Agregar Número de Teléfono', '#', array('id' => 'loadPhoneByAjax')); ?>
   
   </div>
   <div style="clear:both;"></div>
    <div class="row buttons">
        <?php echo CHtml::submitButton($phones->isNewRecord ? 'Create' : 'Save'); ?>
    </div>
<?php $this->endWidget(); ?>
</div><!-- form -->
 <?php
   $index = 0;
      Yii::app()->clientScript->registerScript('loadphone', '
      var _index = ' . $index . ';
      $("#loadPhoneByAjax").click(function(e){
         e.preventDefault();
         var _url = "' . Yii::app()->controller->createUrl("loadPhoneByAjax", array("load_for" => $this->action->id)) . '&index="+_index;
         $.ajax({
            url: _url,
            success:function(response){
               $("#phones").append(response);
               $("#phones .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      _index++;});
      ', CClientScript::POS_END); 
 ?>
