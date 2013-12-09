<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']name_periodontal_biohazard'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']name_periodontal_biohazard',array('size'=>60,'maxlength'=>64)); ?>
	<?php echo CHtml::error($model,'['.$index.']name_periodontal_biohazard'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']flag_periodontal_biohazard'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']flag_periodontal_biohazard'); ?>
	<?php echo CHtml::error($model,'['.$index.']flag_periodontal_biohazard'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']observation_periodontal_biohazard'); ?>
	<?php echo CHtml::activeTextArea($model,'['.$index.']observation_periodontal_biohazard',array('rows'=>6, 'cols'=>50)); ?>
	<?php echo CHtml::error($model,'['.$index.']observation_periodontal_biohazard'); ?>
</div>