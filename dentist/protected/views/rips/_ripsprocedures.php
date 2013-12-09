<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']cie10_code'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']cie10_code',array('size'=>60,'maxlength'=>128)); ?>
	<?php echo CHtml::error($model,'['.$index.']cie10_code'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']cups_code'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']cups_code',array('size'=>60,'maxlength'=>128)); ?>
	<?php echo CHtml::error($model,'['.$index.']cups_code'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']value_procedure'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']value_procedure',array('size'=>60,'maxlength'=>256)); ?>
	<?php echo CHtml::error($model,'['.$index.']value_procedure'); ?>
</div>