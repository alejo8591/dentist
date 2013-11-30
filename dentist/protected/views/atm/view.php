<?php
/* @var $this AtmController */
/* @var $model Atm */

$this->breadcrumbs=array(
	'Atms'=>array('index'),
	$model->id_tbl_atm,
);

$this->menu=array(
	array('label'=>'List Atm', 'url'=>array('index')),
	array('label'=>'Create Atm', 'url'=>array('create')),
	array('label'=>'Update Atm', 'url'=>array('update', 'id'=>$model->id_tbl_atm)),
	array('label'=>'Delete Atm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_atm),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Atm', 'url'=>array('admin')),
);
?>

<h1>View Atm #<?php echo $model->id_tbl_atm; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_atm',
		'id_tbl_anamnesis',
		'observation_atm',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
