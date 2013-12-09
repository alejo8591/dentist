<?php
/* @var $this DiagnosisController */
/* @var $model Diagnosis */

$this->breadcrumbs=array(
	'Diagnosises'=>array('index'),
	$model->id_tbl_diagnosis,
);

$this->menu=array(
	array('label'=>'List Diagnosis', 'url'=>array('index')),
	array('label'=>'Create Diagnosis', 'url'=>array('create')),
	array('label'=>'Update Diagnosis', 'url'=>array('update', 'id'=>$model->id_tbl_diagnosis)),
	array('label'=>'Delete Diagnosis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_diagnosis),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Diagnosis', 'url'=>array('admin')),
);
?>

<h1>View Diagnosis #<?php echo $model->id_tbl_diagnosis; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_diagnosis',
		'id_tbl_anamnesis',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
