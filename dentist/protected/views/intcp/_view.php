<?php
/* @var $this IntcpController */
/* @var $data Intcp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_intcp')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_intcp), array('view', 'id'=>$data->id_tbl_intcp)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_periodontal_examination')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_periodontal_examination); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_option_intcp')); ?>:</b>
	<?php echo CHtml::encode($data->name_option_intcp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_intcp')); ?>:</b>
	<?php echo CHtml::encode($data->code_intcp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nt_intcp')); ?>:</b>
	<?php echo CHtml::encode($data->nt_intcp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observation_option_intcp')); ?>:</b>
	<?php echo CHtml::encode($data->observation_option_intcp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flag_option_intcp')); ?>:</b>
	<?php echo CHtml::encode($data->flag_option_intcp); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

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