<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']number_dental_piece'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']number_dental_piece'); ?>
	<?php echo CHtml::error($model,'['.$index.']number_dental_piece'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']observation_dental_piece'); ?>
	<?php echo CHtml::activeTextArea($model,'['.$index.']observation_dental_piece',array('rows'=>6, 'cols'=>50)); ?>
	<?php echo CHtml::error($model,'['.$index.']observation_dental_piece'); ?>
</div>

<div id="examinationDentalPieces">
        <?php
	        foreach($model->examinationDentalPieces as $id => $examinationDentalPieces):
	            $this->renderPartial('_examinationdentalpieces', array(
	                'model' => $examinationDentalPieces,
	                'index' => $id,
	                'display' => 'block',
	            ));
	        endforeach;
        ?>
  	</div> 
   <div>
      <?php echo CHtml::link('Agregar - Entidad -> Convención para la Pieza Dental', '#', array('id' => 'loadEDP')); ?>
   </div>
   <br />

<div id="treatmentDecisionDentalPieces">
        <?php
	        foreach($model->treatmentDecisionDentalPieces as $id => $treatmentDecisionDentalPieces):
	            $this->renderPartial('_treatmentdecisiondentalpieces', array(
	                'model' => $treatmentDecisionDentalPieces,
	                'index' => $id,
	                'display' => 'block',
	            ));
	        endforeach;
        ?>
  	</div> 
   <div>
      <?php echo CHtml::link('Agregar - Decisión de Tratamiento para la Pieza Dental', '#', array('id' => 'loadTDDP')); ?>
   </div>
   <br />

   <?php
   $indexEDP = 0;
   $indexTDDP = 0;
      Yii::app()->clientScript->registerScript('loadsExaminationDentalPieces', '
      var _indexEDP = ' . $indexEDP . ';
      $("#loadEDP").click(function(e){
         e.preventDefault();
         var _url = "' . Yii::app()->controller->createUrl("loadEDP", array("load" => $this->action->id)) . '&index="+_indexEDP;
         $.ajax({
            url: _url,
            success:function(response){
               $("#examinationDentalPieces").append(response);
               $("#examinationDentalPieces .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      _indexEDP++;});

      var _indexTDDP = ' . $indexTDDP . ';
      $("#loadTDDP").click(function(e){
         e.preventDefault();
         var _url = "' . Yii::app()->controller->createUrl("loadTDDP", array("load" => $this->action->id)) . '&index="+_indexTDDP;
         $.ajax({
            url: _url,
            success:function(response){
               $("#treatmentDecisionDentalPieces").append(response);
               $("#treatmentDecisionDentalPieces .crow").last().animate({
                  opacity : 1, 
                   left: "+50", 
                   height: "toggle"
               });
            }
         });
      _indexTDDP++;});
      ', CClientScript::POS_END); 
 ?>