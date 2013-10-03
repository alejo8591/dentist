<?php
/* @var $this DuringConsultationController */
/* @var $data DuringConsultation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_during_consultation')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_during_consultation), array('view', 'id'=>$data->id_tbl_during_consultation)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_during_consultation')); ?>:</b>
	<?php echo CHtml::encode($data->name_during_consultation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
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