<?php
/* @var $this OptionsDiagnosisController */
/* @var $model OptionsDiagnosis */

$this->breadcrumbs=array(
	'Options Diagnosises'=>array('index'),
	$model->id_tbl_option_diagnosis,
);

$this->menu=array(
	array('label'=>'List OptionsDiagnosis', 'url'=>array('index')),
	array('label'=>'Create OptionsDiagnosis', 'url'=>array('create')),
	array('label'=>'Update OptionsDiagnosis', 'url'=>array('update', 'id'=>$model->id_tbl_option_diagnosis)),
	array('label'=>'Delete OptionsDiagnosis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_option_diagnosis),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionsDiagnosis', 'url'=>array('admin')),
);
?>

<h1>View OptionsDiagnosis #<?php echo $model->id_tbl_option_diagnosis; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_option_diagnosis',
		'id_tbl_diagnosis',
		'name_option_diagnosis',
		'type_option_diagnosis',
		'cie10',
		'observation_option_diagnosis',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
