<?php
/* @var $this OptionsPathologicalHistoryController */
/* @var $model OptionsPathologicalHistory */

$this->breadcrumbs=array(
	'Options Pathological Histories'=>array('index'),
	$model->id_tbl_option_pathological_history,
);

$this->menu=array(
	array('label'=>'List OptionsPathologicalHistory', 'url'=>array('index')),
	array('label'=>'Create OptionsPathologicalHistory', 'url'=>array('create')),
	array('label'=>'Update OptionsPathologicalHistory', 'url'=>array('update', 'id'=>$model->id_tbl_option_pathological_history)),
	array('label'=>'Delete OptionsPathologicalHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_option_pathological_history),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionsPathologicalHistory', 'url'=>array('admin')),
);
?>

<h1>View OptionsPathologicalHistory #<?php echo $model->id_tbl_option_pathological_history; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_option_pathological_history',
		'id_tbl_personal_background',
		'name_option_pathological_history',
		'flag_option_pathological_history',
		'observation_option_pathological_history',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
