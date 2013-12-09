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

   <div id="cariesRiskClassifications">
        <?php
          foreach($model->cariesRiskClassifications as $id => $cariesRiskClassifications):
              $this->renderPartial('_cariesriskclassifications', array(
                  'model' => $cariesRiskClassifications,
                  'index' => $id,
                  'display' => 'block',
              ));
          endforeach;
        ?>
    </div> 
   <div>
      <?php echo CHtml::link('Agregar - Clasificación de Riesgo para Caries', '#', array('id' => 'loadCRC')); ?>
   </div>
   <br />

   <div id="periodontalRiskClassifications">
        <?php
          foreach($model->periodontalRiskClassifications as $id => $periodontalRiskClassifications):
              $this->renderPartial('_periodontalriskclassification', array(
                  'model' => $periodontalRiskClassifications,
                  'index' => $id,
                  'display' => 'block',
              ));
          endforeach;
        ?>
    </div> 
   <div>
      <?php echo CHtml::link('Agregar - Clasificación de Riesgo para Enfermedad Periodontal', '#', array('id' => 'loadPRC')); ?>
   </div>
   <br />

   <div id="periodontalBiohazards">
        <?php
          foreach($model->periodontalBiohazards as $id => $periodontalBiohazards):
              $this->renderPartial('_periodontalbiohazard', array(
                  'model' => $periodontalBiohazards,
                  'index' => $id,
                  'display' => 'block',
              ));
          endforeach;
        ?>
    </div> 
   <div>
      <?php echo CHtml::link('Agregar - Factores de Riesgo Biológicos', '#', array('id' => 'loadPB')); ?>
   </div>
   <br />

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php
     $indexDP = 0;
     $indexCRC = 0;
     $indexPRC = 0;
     $indexPB = 0;
      Yii::app()->clientScript->registerScript('loadsDentalExamination', '
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

      var _indexCRC = ' . $indexCRC . ';
      $("#loadCRC").click(function(e){
         e.preventDefault();
         var __url = "' . Yii::app()->controller->createUrl("loadCRC", array("load" => $this->action->id)) . '&index="+_indexCRC;
         $.ajax({
            url: __url,
            success:function(response){
               $("#cariesRiskClassifications").append(response);
               $("#cariesRiskClassifications .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      _indexCRC++;});

      var _indexPRC = ' . $indexPRC . ';
      $("#loadPRC").click(function(e){
         e.preventDefault();
         var __url = "' . Yii::app()->controller->createUrl("loadPRC", array("load" => $this->action->id)) . '&index="+_indexPRC;
         $.ajax({
            url: __url,
            success:function(response){
               $("#periodontalRiskClassifications").append(response);
               $("#periodontalRiskClassifications .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      _indexPRC++;});

      var _indexPB = ' . $indexPB . ';
      $("#loadPB").click(function(e){
         e.preventDefault();
         var __url = "' . Yii::app()->controller->createUrl("loadPB", array("load" => $this->action->id)) . '&index="+_indexPB;
         $.ajax({
            url: __url,
            success:function(response){
               $("#periodontalBiohazards").append(response);
               $("#periodontalBiohazards .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      _indexPB++;});
      ', CClientScript::POS_END); 
 ?>