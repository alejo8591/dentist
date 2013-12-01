<?php
/* @var $this IntcpController */
/* @var $model Intcp */

$this->breadcrumbs=array(
	'Intcps'=>array('index'),
	$model->id_tbl_intcp,
);

$this->menu=array(
	array('label'=>'List Intcp', 'url'=>array('index')),
	array('label'=>'Create Intcp', 'url'=>array('create')),
	array('label'=>'Update Intcp', 'url'=>array('update', 'id'=>$model->id_tbl_intcp)),
	array('label'=>'Delete Intcp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_intcp),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Intcp', 'url'=>array('admin')),
);
?>

<h1>View Intcp #<?php echo $model->id_tbl_intcp; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_intcp',
		'id_tbl_periodontal_examination',
		'name_option_intcp',
		'code_intcp',
		'nt_intcp',
		'observation_option_intcp',
		'flag_option_intcp',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
