<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']name_treatment_decision_dental_piece'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']name_treatment_decision_dental_piece',array('size'=>60,'maxlength'=>64)); ?>
	<?php echo CHtml::error($model,'['.$index.']name_treatment_decision_dental_piece'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']type_treatment_decision_dental_piece'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']type_treatment_decision_dental_piece'); ?>
	<?php echo CHtml::error($model,'['.$index.']type_treatment_decision_dental_piece'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']observation_treatment_decision_dental_piece'); ?>
	<?php echo CHtml::activeTextArea($model,'['.$index.']observation_treatment_decision_dental_piece',array('rows'=>6, 'cols'=>50)); ?>
	<?php echo CHtml::error($model,'['.$index.']observation_treatment_decision_dental_piece'); ?>
</div>