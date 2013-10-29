<?php
/* @var $this PhysicalHistoryController */
/* @var $data PhysicalHistory */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_physical_history')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_physical_history), array('view', 'id'=>$data->id_tbl_physical_history)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tbl_physical_historycol')); ?>:</b>
	<?php echo CHtml::encode($data->tbl_physical_historycol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_anamnesis')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_anamnesis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tbl_physical_historycol1')); ?>:</b>
	<?php echo CHtml::encode($data->tbl_physical_historycol1); ?>
	<br />


</div>