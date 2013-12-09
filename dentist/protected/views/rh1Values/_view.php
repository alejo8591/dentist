<?php
/* @var $this Rh1ValuesController */
/* @var $data Rh1Values */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_rh1_values')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tbl_rh1_values), array('view', 'id'=>$data->id_tbl_rh1_values)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tbl_rh1')); ?>:</b>
	<?php echo CHtml::encode($data->id_tbl_rh1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('month')); ?>:</b>
	<?php echo CHtml::encode($data->month); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('landfill_ordinary')); ?>:</b>
	<?php echo CHtml::encode($data->landfill_ordinary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('landfill_idrs')); ?>:</b>
	<?php echo CHtml::encode($data->landfill_idrs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recycling_recyclable')); ?>:</b>
	<?php echo CHtml::encode($data->recycling_recyclable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recycling_idr')); ?>:</b>
	<?php echo CHtml::encode($data->recycling_idr); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('total_waste_not_hazardous')); ?>:</b>
	<?php echo CHtml::encode($data->total_waste_not_hazardous); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hef_biosanitary')); ?>:</b>
	<?php echo CHtml::encode($data->hef_biosanitary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hef_sharps')); ?>:</b>
	<?php echo CHtml::encode($data->hef_sharps); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hef_idd')); ?>:</b>
	<?php echo CHtml::encode($data->hef_idd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incineration_sharps')); ?>:</b>
	<?php echo CHtml::encode($data->incineration_sharps); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incineration_pathological')); ?>:</b>
	<?php echo CHtml::encode($data->incineration_pathological); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incineration_chemical')); ?>:</b>
	<?php echo CHtml::encode($data->incineration_chemical); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incineration_other_residues')); ?>:</b>
	<?php echo CHtml::encode($data->incineration_other_residues); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('incineration_idi')); ?>:</b>
	<?php echo CHtml::encode($data->incineration_idi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ots_other_residues')); ?>:</b>
	<?php echo CHtml::encode($data->ots_other_residues); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ots_chemical_reactives')); ?>:</b>
	<?php echo CHtml::encode($data->ots_chemical_reactives); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ots_idos')); ?>:</b>
	<?php echo CHtml::encode($data->ots_idos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_waste_hazardous')); ?>:</b>
	<?php echo CHtml::encode($data->total_waste_hazardous); ?>
	<br />

	*/ ?>

</div>