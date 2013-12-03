<?php
/* @var $this IntcpSilnessLoeController */
/* @var $model IntcpSilnessLoe */

$this->breadcrumbs=array(
	'Intcp Silness Loes'=>array('index'),
	$model->id_tbl_intcp_silness_loe,
);

$this->menu=array(
	array('label'=>'List IntcpSilnessLoe', 'url'=>array('index')),
	array('label'=>'Create IntcpSilnessLoe', 'url'=>array('create')),
	array('label'=>'Update IntcpSilnessLoe', 'url'=>array('update', 'id'=>$model->id_tbl_intcp_silness_loe)),
	array('label'=>'Delete IntcpSilnessLoe', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_intcp_silness_loe),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IntcpSilnessLoe', 'url'=>array('admin')),
);
?>

<h1>View IntcpSilnessLoe #<?php echo $model->id_tbl_intcp_silness_loe; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_intcp_silness_loe',
		'id_tbl_periodontal_examination',
		'flag_option_intcp_silness_loe',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
