<?php
/* @var $this PeriodontalExaminationController */
/* @var $model PeriodontalExamination */
/* @var $form CActiveForm */
?>

<div class="form">

<?php
	Yii::app()->clientScript->registerCoreScript('jquery'); 
    $form=$this->beginWidget('CActiveForm', array(
	'id'=>'periodontal-examination-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tbl_anamnesis'); ?>
		<?php echo $form->dropDownList($model,'id_tbl_anamnesis', $model->getAnamnesies()); ?>
		<?php echo $form->error($model,'id_tbl_anamnesis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description_periodontal_examination'); ?>
		<?php echo $form->textArea($model,'description_periodontal_examination',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description_periodontal_examination'); ?>
	</div>

	<br />
	<div id="intcps">
        <?php
	        foreach($model->intcps as $id => $intcps):
	            $this->renderPartial('_intcp', array(
	                'model' => $intcps,
	                'index' => $id,
	                'display' => 'block',
	            ));
	        endforeach;
        ?>
  	</div> 
   <div>
      <?php echo CHtml::link('Agregar - INTCP', '#', array('id' => 'loadINTCP')); ?>
   </div>
   <br />

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
   $index = 0;
      Yii::app()->clientScript->registerScript('loadsAtms', '
      var _index = ' . $index . ';
      $("#loadINTCP").click(function(e){
         e.preventDefault();
         var _url = "' . Yii::app()->controller->createUrl("loadINTCP", array("load" => $this->action->id)) . '&index="+_index;
         $.ajax({
            url: _url,
            success:function(response){
               $("#intcps").append(response);
               $("#intcps .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      _index++;});

      var __index = ' . $index . ';
      $("#loadOAMM").click(function(e){
         e.preventDefault();
         var __url = "' . Yii::app()->controller->createUrl("loadOAMM", array("load" => $this->action->id)) . '&index="+__index;
         $.ajax({
            url: __url,
            success:function(response){
               $("#optionsAtmMandibularMovements").append(response);
               $("#optionsAtmMandibularMovements .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      __index++;});

      var __index = ' . $index . ';
      $("#loadOASF").click(function(e){
         e.preventDefault();
         var __url = "' . Yii::app()->controller->createUrl("loadOASF", array("load" => $this->action->id)) . '&index="+__index;
         $.ajax({
            url: __url,
            success:function(response){
               $("#optionsAtmSoftTissues").append(response);
               $("#optionsAtmSoftTissues .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      __index++;});
  
      var _index = ' . $index . ';
      $("#loadOAIST").click(function(e){
         e.preventDefault();
         var _url = "' . Yii::app()->controller->createUrl("loadOAIST", array("load" => $this->action->id)) . '&index="+_index;
         $.ajax({
            url: _url,
            success:function(response){
               $("#optionsAtmIntraoralSoftTissues").append(response);
               $("#optionsAtmIntraoralSoftTissues .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      _index++;});

      var __index = ' . $index . ';
      $("#loadOAIHT").click(function(e){
         e.preventDefault();
         var __url = "' . Yii::app()->controller->createUrl("loadOAIHT", array("load" => $this->action->id)) . '&index="+__index;
         $.ajax({
            url: __url,
            success:function(response){
               $("#optionsAtmIntraoralHardTissues").append(response);
               $("#optionsAtmIntraoralHardTissues .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      __index++;});
      ', CClientScript::POS_END); 
 ?>