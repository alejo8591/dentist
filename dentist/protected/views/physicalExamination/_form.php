<?php
/* @var $this PhysicalExaminationController */
/* @var $model PhysicalExamination */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
	Yii::app()->clientScript->registerCoreScript('jquery');
	$form=$this->beginWidget('CActiveForm', array(
	'id'=>'physical-examination-form',
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
  	<div id="optionsVitalSigns">
        <?php
	        foreach($model->optionsVitalSigns as $id => $optionsVitalSigns):
	            $this->renderPartial('_optionsvitalsigns', array(
	                'model' => $optionsVitalSigns,
	                'index' => $id,
	                'display' => 'block',
	            ));
	        endforeach;
        ?>
  	</div> 
   <div>
      <?php echo CHtml::link('Agregar - Signos Vitales', '#', array('id' => 'loadOVS')); ?>
   </div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
   $index = 0;
      Yii::app()->clientScript->registerScript('loadsSocial', '
      var _index = ' . $index . ';
      $("#loadOVS").click(function(e){
         e.preventDefault();
         var _url = "' . Yii::app()->controller->createUrl("loadOVS", array("load" => $this->action->id)) . '&index="+_index;
         $.ajax({
            url: _url,
            success:function(response){
               $("#optionsVitalSigns").append(response);
               $("#optionsVitalSigns .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      _index++;});

      var __index = ' . $index . ';
      $("#loadOOH").click(function(e){
         e.preventDefault();
         var __url = "' . Yii::app()->controller->createUrl("loadOOH", array("load" => $this->action->id)) . '&index="+__index;
         $.ajax({
            url: __url,
            success:function(response){
               $("#optionsOrallHabits").append(response);
               $("#optionsOrallHabits .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      __index++;});

      var __index = ' . $index . ';
      $("#loadODH").click(function(e){
         e.preventDefault();
         var __url = "' . Yii::app()->controller->createUrl("loadODH", array("load" => $this->action->id)) . '&index="+__index;
         $.ajax({
            url: __url,
            success:function(response){
               $("#optionsDentalHistories").append(response);
               $("#optionsDentalHistories .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      __index++;});
  
      var _index = ' . $index . ';
      $("#loadOPH").click(function(e){
         e.preventDefault();
         var _url = "' . Yii::app()->controller->createUrl("loadOPH", array("load" => $this->action->id)) . '&index="+_index;
         $.ajax({
            url: _url,
            success:function(response){
               $("#optionsPathologicalHistories").append(response);
               $("#optionsPathologicalHistories .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      _index++;});

      var __index = ' . $index . ';
      $("#loadOOG").click(function(e){
         e.preventDefault();
         var __url = "' . Yii::app()->controller->createUrl("loadOOG", array("load" => $this->action->id)) . '&index="+__index;
         $.ajax({
            url: __url,
            success:function(response){
               $("#optionsObstetricGynecologies").append(response);
               $("#optionsObstetricGynecologies .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      __index++;});
      ', CClientScript::POS_END); 
 ?>