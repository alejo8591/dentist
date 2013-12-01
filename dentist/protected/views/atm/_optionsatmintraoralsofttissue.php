<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']name_option_atm_intraoral_soft_tissue'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']name_option_atm_intraoral_soft_tissue',array('size'=>60,'maxlength'=>128)); ?>
	<?php echo CHtml::error($model,'['.$index.']name_option_atm_intraoral_soft_tissue'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']type_option_atm_intraoral_soft_tissue'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']type_option_atm_intraoral_soft_tissue'); ?>
	<?php echo CHtml::error($model,'['.$index.']type_option_atm_intraoral_soft_tissue'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']observation_option_atm_intraoral_soft_tissue'); ?>
	<?php echo CHtml::activeTextArea($model,'['.$index.']observation_option_atm_intraoral_soft_tissue',array('rows'=>6, 'cols'=>50)); ?>
	<?php echo CHtml::error($model,'['.$index.']observation_option_atm_intraoral_soft_tissue'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']flag_option_atm_intraoral_soft_tissue'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']flag_option_atm_intraoral_soft_tissue'); ?>
	<?php echo CHtml::error($model,'['.$index.']flag_option_atm_intraoral_soft_tissue'); ?>
</div>