<?php
/* @var $this CariesRiskClassificationController */
/* @var $data CariesRiskClassification */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_caries_risk_classification')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_caries_risk_classification), array('view', 'id'=>$data->id_tbl_caries_risk_classification)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_dental_examination')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_dental_examination); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_caries_risk_classification')); ?>:</b>
	<?php echo CHtml::encode($data->name_caries_risk_classification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observation_caries_risk_classification')); ?>:</b>
	<?php echo CHtml::encode($data->observation_caries_risk_classification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('score_caries_risk_classification')); ?>:</b>
	<?php echo CHtml::encode($data->score_caries_risk_classification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_sector_caries_risk_classification')); ?>:</b>
	<?php echo CHtml::encode($data->total_sector_caries_risk_classification); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	*/ ?>

</div>