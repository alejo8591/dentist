<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']name_option_intcp'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']name_option_intcp',array('size'=>60,'maxlength'=>128)); ?>
	<?php echo CHtml::error($model,'['.$index.']name_option_intcp'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']code_intcp'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']code_intcp',array('size'=>60,'maxlength'=>64)); ?>
	<?php echo CHtml::error($model,'['.$index.']code_intcp'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']nt_intcp'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']nt_intcp',array('size'=>60,'maxlength'=>64)); ?>
	<?php echo CHtml::error($model,'['.$index.']nt_intcp'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']observation_option_intcp'); ?>
	<?php echo CHtml::activeTextArea($model,'['.$index.']observation_option_intcp',array('rows'=>6, 'cols'=>50)); ?>
	<?php echo CHtml::error($model,'['.$index.']observation_option_intcp'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']flag_option_intcp'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']flag_option_intcp'); ?>
	<?php echo CHtml::error($model,'['.$index.']flag_option_intcp'); ?>
</div>