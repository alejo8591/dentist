<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']name_caries_risk_classification'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']name_caries_risk_classification',array('size'=>60,'maxlength'=>64)); ?>
	<?php echo CHtml::error($model,'['.$index.']name_caries_risk_classification'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']observation_caries_risk_classification'); ?>
	<?php echo CHtml::activeTextArea($model,'['.$index.']observation_caries_risk_classification',array('rows'=>6, 'cols'=>50)); ?>
	<?php echo CHtml::error($model,'['.$index.']observation_caries_risk_classification'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']score_caries_risk_classification'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']score_caries_risk_classification',array('size'=>60,'maxlength'=>64)); ?>
	<?php echo CHtml::error($model,'['.$index.']score_caries_risk_classification'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']total_sector_caries_risk_classification'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']total_sector_caries_risk_classification',array('size'=>60,'maxlength'=>64)); ?>
	<?php echo CHtml::error($model,'['.$index.']total_sector_caries_risk_classification'); ?>
</div>
