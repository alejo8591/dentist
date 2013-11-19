	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'['.$index.']name_option_obstetric_gynecology'); ?>
		<?php echo CHtml::activeTextField($model,'['.$index.']name_option_obstetric_gynecology',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo CHtml::error($model,'['.$index.']name_option_obstetric_gynecology'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'['.$index.']flag_option_option_obstetric_gynecology'); ?>
		<?php echo CHtml::activeTextField($model,'['.$index.']flag_option_option_obstetric_gynecology'); ?>
		<?php echo CHtml::error($model,'['.$index.']flag_option_option_obstetric_gynecology'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'['.$index.']observation_option_obstetric_gynecology'); ?>
		<?php echo CHtml::activeTextArea($model,'['.$index.']observation_option_obstetric_gynecology',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo CHtml::error($model,'['.$index.']observation_option_obstetric_gynecology'); ?>
	</div>