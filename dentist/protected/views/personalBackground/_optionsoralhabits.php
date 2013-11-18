<div class="row">
		<?php echo CHtml::activeLabelEx($model,'['.$index.']id_tbl_personal_background'); ?>
		<?php echo CHtml::activeTextField($model,'['.$index.']id_tbl_personal_background'); ?>
		<?php echo CHtml::error($model,'['.$index.']id_tbl_personal_background'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'['.$index.']name_option_oral_habits'); ?>
		<?php echo CHtml::activeTextField($model,'['.$index.']name_option_oral_habits',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo CHtml::error($model,'['.$index.']name_option_oral_habits'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'['.$index.']flag_option_oral_habits'); ?>
		<?php echo CHtml::activeTextField($model,'['.$index.']flag_option_oral_habits'); ?>
		<?php echo CHtml::error($model,'['.$index.']flag_option_oral_habits'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'['.$index.']observation_option_oral_habits'); ?>
		<?php echo CHtml::activeTextArea($model,'['.$index.']observation_option_oral_habits',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo CHtml::error($model,'['.$index.']observation_option_oral_habits'); ?>
	</div>
