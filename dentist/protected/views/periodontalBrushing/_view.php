<?php
/* @var $this PeriodontalBrushingController */
/* @var $data PeriodontalBrushing */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_periodontal_brushing')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_periodontal_brushing), array('view', 'id'=>$data->id_tbl_periodontal_brushing)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_periodontal_examination')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_periodontal_examination); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_option_periodontal_brushing')); ?>:</b>
	<?php echo CHtml::encode($data->name_option_periodontal_brushing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_periodontal_brushing')); ?>:</b>
	<?php echo CHtml::encode($data->type_periodontal_brushing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('flag_option_periodontal_brushing')); ?>:</b>
	<?php echo CHtml::encode($data->flag_option_periodontal_brushing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observations_periodontal_brushing')); ?>:</b>
	<?php echo CHtml::encode($data->observations_periodontal_brushing); ?>
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