<?php
/* @var $this DentalPiecesController */
/* @var $data DentalPieces */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_dental_piece')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_dental_piece), array('view', 'id'=>$data->id_tbl_dental_piece)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_dental_examination')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_dental_examination); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number_dental_piece')); ?>:</b>
	<?php echo CHtml::encode($data->number_dental_piece); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state_dental_piece')); ?>:</b>
	<?php echo CHtml::encode($data->state_dental_piece); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flag_dental_piece')); ?>:</b>
	<?php echo CHtml::encode($data->flag_dental_piece); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_dental_piece')); ?>:</b>
	<?php echo CHtml::encode($data->type_dental_piece); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observation_dental_piece')); ?>:</b>
	<?php echo CHtml::encode($data->observation_dental_piece); ?>
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