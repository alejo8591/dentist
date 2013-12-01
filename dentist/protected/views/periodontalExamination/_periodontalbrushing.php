<div class="row">
		<?php echo CHtml::activeLabelEx($model,'['.$index.']name_option_periodontal_brushing'); ?>
		<?php echo CHtml::activeTextField($model,'['.$index.']name_option_periodontal_brushing',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo CHtml::error($model,'['.$index.']name_option_periodontal_brushing'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'['.$index.']type_periodontal_brushing'); ?>
		<?php echo CHtml::activeTextField($model,'['.$index.']type_periodontal_brushing'); ?>
		<?php echo CHtml::error($model,'['.$index.']type_periodontal_brushing'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'['.$index.']flag_option_periodontal_brushing'); ?>
		<?php echo CHtml::activeTextField($model,'['.$index.']flag_option_periodontal_brushing'); ?>
		<?php echo CHtml::error($model,'['.$index.']flag_option_periodontal_brushing'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'['.$index.']observations_periodontal_brushing'); ?>
		<?php echo CHtml::activeTextArea($model,'['.$index.']observations_periodontal_brushing',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo CHtml::error($model,'['.$index.']observations_periodontal_brushing'); ?>
	</div>