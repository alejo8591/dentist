<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']name_periodontal_risk_classification'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']name_periodontal_risk_classification',array('size'=>60,'maxlength'=>64)); ?>
	<?php echo CHtml::error($model,'['.$index.']name_periodontal_risk_classification'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']flag_periodontal_risk_classification'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']flag_periodontal_risk_classification'); ?>
	<?php echo CHtml::error($model,'['.$index.']flag_periodontal_risk_classification'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']observation_periodontal_risk_classification'); ?>
	<?php echo CHtml::activeTextArea($model,'['.$index.']observation_periodontal_risk_classification',array('rows'=>6, 'cols'=>50)); ?>
	<?php echo CHtml::error($model,'['.$index.']observation_periodontal_risk_classification'); ?>
</div>