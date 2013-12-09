<?php
/* @var $this DentalExaminationController */
/* @var $model DentalExamination */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
	Yii::app()->clientScript->registerCoreScript('jquery');
	$form=$this->beginWidget('CActiveForm', array(
		'id'=>'dental-examination-form',
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

   <div id="dentalPieces">
        <?php
	        foreach($model->dentalPieces as $id => $dentalPieces):
	            $this->renderPartial('_dentalpieces', array(
	                'model' => $dentalPieces,
	                'index' => $id,
	                'display' => 'block',
	            ));
	        endforeach;
        ?>
  	</div> 
   <div>
      <?php echo CHtml::link('Agregar - Pieza Dental', '#', array('id' => 'loadDP')); ?>
   </div>
   <br />

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
   $indexDP = 0;
   $index = 0;
      Yii::app()->clientScript->registerScript('loadsAtms', '
      var _indexDP = ' . $indexDP . ';
      $("#loadDP").click(function(e){
         e.preventDefault();
         var _url = "' . Yii::app()->controller->createUrl("loadDP", array("load" => $this->action->id)) . '&index="+_indexDP;
         $.ajax({
            url: _url,
            success:function(response){
               $("#dentalPieces").append(response);
               $("#dentalPieces .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      _indexDP++;});

      var _index = ' . $index . ';
      $("#loadOAMM").click(function(e){
         e.preventDefault();
         var __url = "' . Yii::app()->controller->createUrl("loadOAMM", array("load" => $this->action->id)) . '&index="+_index;
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
      _index++;});
      ', CClientScript::POS_END); 
 ?>