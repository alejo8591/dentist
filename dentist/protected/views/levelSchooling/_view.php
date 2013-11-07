<?php
/* @var $this LevelSchoolingController */
/* @var $data LevelSchooling */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_level_schooling')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_level_schooling), array('view', 'id'=>$data->id_tbl_level_schooling)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_level_schooling')); ?>:</b>
	<?php echo CHtml::encode($data->name_level_schooling); ?>
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