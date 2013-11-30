<?php
/* @var $this OptionsAtmSoftTissueController */
/* @var $data OptionsAtmSoftTissue */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_option_atm_soft_tissue')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_option_atm_soft_tissue), array('view', 'id'=>$data->id_tbl_option_atm_soft_tissue)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_atm')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_atm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_option_atm_soft_tissue')); ?>:</b>
	<?php echo CHtml::encode($data->name_option_atm_soft_tissue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flag_option_atm_soft_tissue')); ?>:</b>
	<?php echo CHtml::encode($data->flag_option_atm_soft_tissue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observation_atm_soft_tissue')); ?>:</b>
	<?php echo CHtml::encode($data->observation_atm_soft_tissue); ?>
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