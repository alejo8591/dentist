<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']name_examination_dental_pieces'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']name_examination_dental_pieces',array('size'=>60,'maxlength'=>64)); ?>
	<?php echo CHtml::error($model,'['.$index.']name_examination_dental_pieces'); ?>
</div>
<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']type_examination_dental_pieces'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']type_examination_dental_pieces'); ?>
	<?php echo CHtml::error($model,'['.$index.']type_examination_dental_pieces'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']observation_examination_dental_pieces'); ?>
	<?php echo CHtml::activeTextArea($model,'['.$index.']observation_examination_dental_pieces',array('rows'=>6, 'cols'=>50)); ?>
	<?php echo CHtml::error($model,'['.$index.']observation_examination_dental_pieces'); ?>
</div>