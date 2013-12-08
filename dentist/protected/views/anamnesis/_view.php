<?php
/* @var $this AnamnesisController */
/* @var $data Anamnesis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_anamnesis')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_anamnesis), array('view', 'id'=>$data->id_tbl_anamnesis)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('middle_name')); ?>:</b>
	<?php echo CHtml::encode($data->middle_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paternal_surname')); ?>:</b>
	<?php echo CHtml::encode($data->paternal_surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mothers_maiden_name')); ?>:</b>
	<?php echo CHtml::encode($data->mothers_maiden_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_birth')); ?>:</b>
	<?php echo CHtml::encode($data->date_birth); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('place_of_birth')); ?>:</b>
	<?php echo CHtml::encode($data->place_of_birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('age')); ?>:</b>
	<?php echo CHtml::encode($data->age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genre')); ?>:</b>
	<?php echo CHtml::encode($data->genre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blood_group')); ?>:</b>
	<?php echo CHtml::encode($data->blood_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_country')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_city')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('locality')); ?>:</b>
	<?php echo CHtml::encode($data->locality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_level_schooling')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_level_schooling); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_profession')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_profession); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('occupation')); ?>:</b>
	<?php echo CHtml::encode($data->occupation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact')); ?>:</b>
	<?php echo CHtml::encode($data->contact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_healt_regimen')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_healt_regimen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_healt_institution')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_healt_institution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description_healt')); ?>:</b>
	<?php echo CHtml::encode($data->description_healt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('family_history')); ?>:</b>
	<?php echo CHtml::encode($data->family_history); ?>
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

	*/ ?>

</div>