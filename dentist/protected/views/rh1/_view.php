<?php
/* @var $this Rh1Controller */
/* @var $data Rh1 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_rh1')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_rh1), array('view', 'id'=>$data->id_tbl_rh1)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provider_class')); ?>:</b>
	<?php echo CHtml::encode($data->provider_class); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_surname')); ?>:</b>
	<?php echo CHtml::encode($data->name_surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_document')); ?>:</b>
	<?php echo CHtml::encode($data->id_document); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provider_code')); ?>:</b>
	<?php echo CHtml::encode($data->provider_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	*/ ?>

</div>