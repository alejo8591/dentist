<?php
/* @var $this HealtRegimenController */
/* @var $data HealtRegimen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_healt_regimen')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_healt_regimen), array('view', 'id'=>$data->id_tbl_healt_regimen)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_healt_regimen')); ?>:</b>
	<?php echo CHtml::encode($data->name_healt_regimen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

</div>