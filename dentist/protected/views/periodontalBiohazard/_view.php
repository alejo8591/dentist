<?php
/* @var $this PeriodontalBiohazardController */
/* @var $data PeriodontalBiohazard */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_periodontal_biohazard')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_periodontal_biohazard), array('view', 'id'=>$data->id_tbl_periodontal_biohazard)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_dental_examination')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_dental_examination); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_periodontal_biohazard')); ?>:</b>
	<?php echo CHtml::encode($data->name_periodontal_biohazard); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flag_periodontal_biohazard')); ?>:</b>
	<?php echo CHtml::encode($data->flag_periodontal_biohazard); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observation_periodontal_biohazard')); ?>:</b>
	<?php echo CHtml::encode($data->observation_periodontal_biohazard); ?>
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