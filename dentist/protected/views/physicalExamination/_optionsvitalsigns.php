	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'['.$index.']name_option_vital_signs'); ?>
		<?php echo CHtml::activeTextField($model,'['.$index.']name_option_vital_signs',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo CHtml::error($model,'['.$index.']name_option_vital_signs'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'['.$index.']flag_option_vital_signs'); ?>
		<?php echo CHtml::activeTextField($model,'['.$index.']flag_option_vital_signs'); ?>
		<?php echo CHtml::error($model,'['.$index.']flag_option_vital_signs'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'['.$index.']observation_option_vital_signs'); ?>
		<?php echo CHtml::activeTextArea($model,'['.$index.']observation_option_vital_signs',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo CHtml::error($model,'['.$index.']observation_option_vital_signs'); ?>
	</div>
	