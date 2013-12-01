<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']name_option_atm_mandibular_movements'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']name_option_atm_mandibular_movements',array('size'=>60,'maxlength'=>128)); ?>
	<?php echo CHtml::error($model,'['.$index.']name_option_atm_mandibular_movements'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']type_option_atm_mandibular_movements'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']type_option_atm_mandibular_movements',array('size'=>60,'maxlength'=>64)); ?>
	<?php echo CHtml::error($model,'['.$index.']type_option_atm_mandibular_movements'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']flag_option_atm_mandibular_movements'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']flag_option_atm_mandibular_movements'); ?>
	<?php echo CHtml::error($model,'['.$index.']flag_option_atm_mandibular_movements'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']observation_atm_mandibular_movements'); ?>
	<?php echo CHtml::activeTextArea($model,'['.$index.']observation_atm_mandibular_movements',array('rows'=>6, 'cols'=>50)); ?>
	<?php echo CHtml::error($model,'['.$index.']observation_atm_mandibular_movements'); ?>
</div>