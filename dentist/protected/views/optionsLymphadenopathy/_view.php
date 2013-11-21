<?php
/* @var $this OptionsLymphadenopathyController */
/* @var $data OptionsLymphadenopathy */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_option_lymphadenopathy')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_option_lymphadenopathy), array('view', 'id'=>$data->id_tbl_option_lymphadenopathy)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_physical_examination')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_physical_examination); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_option_lymphadenopathy')); ?>:</b>
	<?php echo CHtml::encode($data->name_option_lymphadenopathy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flag_option_lymphadenopathy')); ?>:</b>
	<?php echo CHtml::encode($data->flag_option_lymphadenopathy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observation_option_lymphadenopathy')); ?>:</b>
	<?php echo CHtml::encode($data->observation_option_lymphadenopathy); ?>
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