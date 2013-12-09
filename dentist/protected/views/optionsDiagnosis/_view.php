<?php
/* @var $this OptionsDiagnosisController */
/* @var $data OptionsDiagnosis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_option_diagnosis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_option_diagnosis), array('view', 'id'=>$data->id_tbl_option_diagnosis)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_diagnosis')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_diagnosis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_option_diagnosis')); ?>:</b>
	<?php echo CHtml::encode($data->name_option_diagnosis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_option_diagnosis')); ?>:</b>
	<?php echo CHtml::encode($data->type_option_diagnosis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cie10')); ?>:</b>
	<?php echo CHtml::encode($data->cie10); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observation_option_diagnosis')); ?>:</b>
	<?php echo CHtml::encode($data->observation_option_diagnosis); ?>
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