<?php
/* @var $this ProfessionController */
/* @var $data Profession */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_profession')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_profession), array('view', 'id'=>$data->id_tbl_profession)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_profession')); ?>:</b>
	<?php echo CHtml::encode($data->name_profession); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />
</div>