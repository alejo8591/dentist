<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']type_address'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']type_address',array('size'=>60,'maxlength'=>64)); ?>
	<?php echo CHtml::error($model,'type_address'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']address'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']address',array('size'=>60,'maxlength'=>256)); ?>
	<?php echo CHtml::error($model,'['.$index.']address'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']description'); ?>
	<?php echo CHtml::activeTextArea($model,'['.$index.']description',array('rows'=>6, 'cols'=>50)); ?>
	<?php echo CHtml::error($model,'['.$index.']description'); ?>
</div>
