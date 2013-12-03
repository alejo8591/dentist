<?php
/* @var $this IntcpSilnessLoeController */
/* @var $data IntcpSilnessLoe */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_intcp_silness_loe')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_intcp_silness_loe), array('view', 'id'=>$data->id_tbl_intcp_silness_loe)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_periodontal_examination')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_periodontal_examination); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flag_option_intcp_silness_loe')); ?>:</b>
	<?php echo CHtml::encode($data->flag_option_intcp_silness_loe); ?>
	<br />

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


</div>