<?php
/* @var $this CityController */
/* @var $data City */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_city')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_city), array('view', 'id'=>$data->id_tbl_city)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_country')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city_code')); ?>:</b>
	<?php echo CHtml::encode($data->city_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_city')); ?>:</b>
	<?php echo CHtml::encode($data->name_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postal_code')); ?>:</b>
	<?php echo CHtml::encode($data->postal_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_address')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_address), array('view', 'id'=>$data->id_tbl_address)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_anamnesis')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_anamnesis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_address')); ?>:</b>
	<?php echo CHtml::encode($data->type_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
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