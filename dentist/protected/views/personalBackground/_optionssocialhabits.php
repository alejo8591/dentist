<div class="row">
	<?php echo CHtml::activeLabelEx($model, '['.$index.']name_option_social_habits'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']name_option_social_habits', $value='Habitos Sociales - Tabaco:'); ?>
	<?php echo CHtml::error($model,'['.$index.']name_option_social_habits'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']flag_option_social_habits'); ?>
	<?php echo CHtml::activeDropDownList($model,'['.$index.']flag_option_social_habits', $model->getOptions()); ?>
	<?php echo CHtml::error($model,'['.$index.']flag_option_social_habits'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']observation_option_social_habits'); ?>
	<?php echo CHtml::activeTextArea($model,'['.$index.']observation_option_social_habits',array('rows'=>6, 'cols'=>50)); ?>
	<?php echo CHtml::error($model,'['.$index.']observation_option_social_habits'); ?>
</div>