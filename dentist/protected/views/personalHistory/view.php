<?php
/* @var $this PersonalHistoryController */
/* @var $model PersonalHistory */

$this->breadcrumbs=array(
	'Personal Histories'=>array('index'),
	$model->id_tbl_personal_history,
);

$this->menu=array(
	array('label'=>'List PersonalHistory', 'url'=>array('index')),
	array('label'=>'Create PersonalHistory', 'url'=>array('create')),
	array('label'=>'Update PersonalHistory', 'url'=>array('update', 'id'=>$model->id_tbl_personal_history)),
	array('label'=>'Delete PersonalHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_personal_history),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PersonalHistory', 'url'=>array('admin')),
);
?>

<h1>View PersonalHistory #<?php echo $model->id_tbl_personal_history; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_personal_history',
		'name_personal_history',
		'description',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
