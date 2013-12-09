<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']name_option_diagnosis'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']name_option_diagnosis',array('size'=>60,'maxlength'=>128)); ?>
	<?php echo CHtml::error($model,'['.$index.']name_option_diagnosis'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']type_option_diagnosis'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']type_option_diagnosis'); ?>
	<?php echo CHtml::error($model,'['.$index.']type_option_diagnosis'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']cie10'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']cie10',array('size'=>60,'maxlength'=>128)); ?>
	<?php echo CHtml::error($model,'['.$index.']cie10'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']observation_option_diagnosis'); ?>
	<?php echo CHtml::activeTextArea($model,'['.$index.']observation_option_diagnosis',array('rows'=>6, 'cols'=>50)); ?>
	<?php echo CHtml::error($model,'['.$index.']observation_option_diagnosis'); ?>
</div>