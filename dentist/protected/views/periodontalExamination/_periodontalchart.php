<?php
  Yii::app()->clientScript->registerScript('loadPeridontal','//google.load("jquery", "1.10.1"); google.load("visualization", "1", {packages: ["corechart"]});', CClientScript::POS_HEAD);
?>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']observations_periodontal_chart'); ?>
	<?php echo CHtml::activeTextArea($model,'['.$index.']observations_periodontal_chart',array('rows'=>6, 'cols'=>50)); ?>
	<?php echo CHtml::error($model,'['.$index.']observations_periodontal_chart'); ?>
</div>

<div class="row">
	<?php echo CHtml::activeLabelEx($model,'['.$index.']flag_option_periodontal_chart'); ?>
	<?php echo CHtml::activeTextField($model,'['.$index.']flag_option_periodontal_chart'); ?>
	<?php echo CHtml::error($model,'['.$index.']flag_option_periodontal_chart'); ?>
</div>