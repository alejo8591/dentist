<?php
/* @var $this AtmController */
/* @var $model Atm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
	Yii::app()->clientScript->registerCoreScript('jquery');
	$form=$this->beginWidget('CActiveForm', array(
	'id'=>'atm-form',
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
		<?php echo $form->textField($model,'id_tbl_anamnesis'); ?>
		<?php echo $form->error($model,'id_tbl_anamnesis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observation_atm'); ?>
		<?php echo $form->textArea($model,'observation_atm',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observation_atm'); ?>
	</div>
	<br />
	<div id="optionsAtms">
        <?php
	        foreach($model->optionsAtms as $id => $optionsAtms):
	            $this->renderPartial('_optionsatm', array(
	                'model' => $optionsAtms,
	                'index' => $id,
	                'display' => 'block',
	            ));
	        endforeach;
        ?>
  	</div> 
   <div>
      <?php echo CHtml::link('Agregar - Signos y Sintomas', '#', array('id' => 'loadOA')); ?>
   </div>
   <br />
   <div id="optionsAtmMandibularMovements">
        <?php
	        foreach($model->optionsAtmMandibularMovements as $id => $optionsAtmMandibularMovements):
	            $this->renderPartial('_optionsatmmandibularmovements', array(
	                'model' => $optionsAtmMandibularMovements,
	                'index' => $id,
	                'display' => 'block',
	            ));
	        endforeach;
        ?>
  	</div> 
   <div>
      <?php echo CHtml::link('Agregar - Movimientos Mandibulares', '#', array('id' => 'loadOAMM')); ?>
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
      $("#loadOA").click(function(e){
         e.preventDefault();
         var _url = "' . Yii::app()->controller->createUrl("loadOA", array("load" => $this->action->id)) . '&index="+_index;
         $.ajax({
            url: _url,
            success:function(response){
               $("#optionsAtms").append(response);
               $("#optionsAtms .crow").last().animate({
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
      $("#loadON").click(function(e){
         e.preventDefault();
         var __url = "' . Yii::app()->controller->createUrl("loadON", array("load" => $this->action->id)) . '&index="+__index;
         $.ajax({
            url: __url,
            success:function(response){
               $("#optionsNecks").append(response);
               $("#optionsNecks .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      __index++;});
  
      var _index = ' . $index . ';
      $("#loadOL").click(function(e){
         e.preventDefault();
         var _url = "' . Yii::app()->controller->createUrl("loadOL", array("load" => $this->action->id)) . '&index="+_index;
         $.ajax({
            url: _url,
            success:function(response){
               $("#optionsLymphadenopathies").append(response);
               $("#optionsLymphadenopathies .crow").last().animate({
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