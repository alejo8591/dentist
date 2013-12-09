<?php
/* @var $this CountryController */
/* @var $data Country */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_country')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_country), array('view', 'id'=>$data->id_tbl_country)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country_code')); ?>:</b>
	<?php echo CHtml::encode($data->country_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_country')); ?>:</b>
	<?php echo CHtml::encode($data->name_country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postal_code')); ?>:</b>
	<?php echo CHtml::encode($data->postal_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
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