<?php
/* @var $this PhysicalHistoryController */
/* @var $model PhysicalHistory */

$this->breadcrumbs=array(
	'Physical Histories'=>array('index'),
	$model->id_tbl_physical_history,
);

$this->menu=array(
	array('label'=>'List PhysicalHistory', 'url'=>array('index')),
	array('label'=>'Create PhysicalHistory', 'url'=>array('create')),
	array('label'=>'Update PhysicalHistory', 'url'=>array('update', 'id'=>$model->id_tbl_physical_history)),
	array('label'=>'Delete PhysicalHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_physical_history),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PhysicalHistory', 'url'=>array('admin')),
);
?>

<h1>View PhysicalHistory #<?php echo $model->id_tbl_physical_history; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_physical_history',
		'tbl_physical_historycol',
		'id_tbl_anamnesis',
		'tbl_physical_historycol1',
	),
)); ?>
