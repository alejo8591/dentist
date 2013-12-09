<?php
/* @var $this DiagnosisController */
/* @var $model Diagnosis */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'diagnosis-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_anamnesis'); ?>
		<?php echo $form->dropDownList($model,'id_tbl_anamnesis', $model->getAnamnesies()); ?>
		<?php echo $form->error($model,'id_tbl_anamnesis'); ?>
	</div>
	<br />

   <div id="optionsDiagnosises">
        <?php
          foreach($model->optionsDiagnosises as $id => $optionsDiagnosises):
              $this->renderPartial('_optionsdiagnosis', array(
                  'model' => $optionsDiagnosises,
                  'index' => $id,
                  'display' => 'block',
              ));
          endforeach;
        ?>
    </div> 
   <div>
      <?php echo CHtml::link('Agregar - Diagnostico', '#', array('id' => 'loadOD')); ?>
   </div>
   <br />

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
   $index = 0;
      Yii::app()->clientScript->registerScript('loadsoptionsDiagnoses', '
      var _index = ' . $index . ';
      $("#loadOD").click(function(e){
         e.preventDefault();
         var _url = "' . Yii::app()->controller->createUrl("loadOD", array("load" => $this->action->id)) . '&index="+_index;
         $.ajax({
            url: _url,
            success:function(response){
               $("#optionsDiagnosises").append(response);
               $("#optionsDiagnosises .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      _index++;});
      ', CClientScript::POS_END); 
 ?>