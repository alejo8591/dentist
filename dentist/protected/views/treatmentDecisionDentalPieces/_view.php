<?php
/* @var $this TreatmentDecisionDentalPiecesController */
/* @var $data TreatmentDecisionDentalPieces */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_treatment_decision_dental_piece')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_treatment_decision_dental_piece), array('view', 'id'=>$data->id_tbl_treatment_decision_dental_piece)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_dental_piece')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_dental_piece); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_treatment_decision_dental_piece')); ?>:</b>
	<?php echo CHtml::encode($data->name_treatment_decision_dental_piece); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_treatment_decision_dental_piece')); ?>:</b>
	<?php echo CHtml::encode($data->type_treatment_decision_dental_piece); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observation_treatment_decision_dental_piece')); ?>:</b>
	<?php echo CHtml::encode($data->observation_treatment_decision_dental_piece); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	*/ ?>

</div>