<?php
/* @var $this RipsController */
/* @var $data Rips */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_rips')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_rips), array('view', 'id'=>$data->id_tbl_rips)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_anamnesis')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_anamnesis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bill_of_sale')); ?>:</b>
	<?php echo CHtml::encode($data->bill_of_sale); ?>
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