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
   $index = 0;
      Yii::app()->clientScript->registerScript('loadsExaminationDentalPieces', '
      var _index = ' . $index . ';
      $("#loadEDP").click(function(e){
         e.preventDefault();
         var _url = "' . Yii::app()->controller->createUrl("loadEDP", array("load" => $this->action->id)) . '&index="+_index;
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
      _index++;});

      var _index = ' . $index . ';
      $("#loadTDDP").click(function(e){
         e.preventDefault();
         var _url = "' . Yii::app()->controller->createUrl("loadTDDP", array("load" => $this->action->id)) . '&index="+_index;
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
      _index++;});
      ', CClientScript::POS_END); 
 ?>