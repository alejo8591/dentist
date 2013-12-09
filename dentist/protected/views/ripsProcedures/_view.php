<?php
/* @var $this RipsProceduresController */
/* @var $data RipsProcedures */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_rips_procedures')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_rips_procedures), array('view', 'id'=>$data->id_tbl_rips_procedures)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_rips')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_rips); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('value_procedure')); ?>:</b>
	<?php echo CHtml::encode($data->value_procedure); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cie10_code')); ?>:</b>
	<?php echo CHtml::encode($data->cie10_code); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	*/ ?>

</div>