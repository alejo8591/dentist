<?php
/* @var $this Rh1ValuesController */
/* @var $model Rh1Values */

$this->breadcrumbs=array(
	'Rh1 Values'=>array('index'),
	$model->id_tbl_rh1_values,
);

$this->menu=array(
	array('label'=>'List Rh1Values', 'url'=>array('index')),
	array('label'=>'Create Rh1Values', 'url'=>array('create')),
	array('label'=>'Update Rh1Values', 'url'=>array('update', 'id'=>$model->id_tbl_rh1_values)),
	array('label'=>'Delete Rh1Values', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_rh1_values),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rh1Values', 'url'=>array('admin')),
);
?>

<h1>View Rh1Values #<?php echo $model->id_tbl_rh1_values; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_rh1_values',
		'id_tbl_rh1',
		'month',
		'landfill_ordinary',
		'landfill_idrs',
		'recycling_recyclable',
		'recycling_idr',
		'total_waste_not_hazardous',
		'hef_biosanitary',
		'hef_sharps',
		'hef_idd',
		'incineration_sharps',
		'incineration_pathological',
		'incineration_chemical',
		'incineration_other_residues',
		'incineration_idi',
		'ots_other_residues',
		'ots_chemical_reactives',
		'ots_idos',
		'total_waste_hazardous',
	),
)); ?>
