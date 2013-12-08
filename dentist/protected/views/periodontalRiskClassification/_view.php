<?php
/* @var $this PeriodontalRiskClassificationController */
/* @var $data PeriodontalRiskClassification */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_periodontal_risk_classification')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_periodontal_risk_classification), array('view', 'id'=>$data->id_tbl_periodontal_risk_classification)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_dental_examination')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_dental_examination); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_periodontal_risk_classification')); ?>:</b>
	<?php echo CHtml::encode($data->name_periodontal_risk_classification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flag_periodontal_risk_classification')); ?>:</b>
	<?php echo CHtml::encode($data->flag_periodontal_risk_classification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observation_periodontal_risk_classification')); ?>:</b>
	<?php echo CHtml::encode($data->observation_periodontal_risk_classification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	*/ ?>

</div>