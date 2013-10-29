<?php
/* @var $this HealtInstitutionController */
/* @var $data HealtInstitution */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_healt_institution')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_healt_institution), array('view', 'id'=>$data->id_tbl_healt_institution)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_healt_regimen')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_healt_regimen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_healt_institution')); ?>:</b>
	<?php echo CHtml::encode($data->name_healt_institution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_healt_institution')); ?>:</b>
	<?php echo CHtml::encode($data->id_healt_institution); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	*/ ?>

</div>