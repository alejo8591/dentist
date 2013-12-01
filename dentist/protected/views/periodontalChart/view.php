<?php
/* @var $this PeriodontalChartController */
/* @var $model PeriodontalChart */

$this->breadcrumbs=array(
	'Periodontal Charts'=>array('index'),
	$model->id_tbl_periodontal_chart,
);

$this->menu=array(
	array('label'=>'List PeriodontalChart', 'url'=>array('index')),
	array('label'=>'Create PeriodontalChart', 'url'=>array('create')),
	array('label'=>'Update PeriodontalChart', 'url'=>array('update', 'id'=>$model->id_tbl_periodontal_chart)),
	array('label'=>'Delete PeriodontalChart', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_periodontal_chart),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PeriodontalChart', 'url'=>array('admin')),
);
?>

<h1>View PeriodontalChart #<?php echo $model->id_tbl_periodontal_chart; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_periodontal_chart',
		'id_tbl_periodontal_examination',
		'observations_periodontal_chart',
		'flag_option_periodontal_chart',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
