<?php
/* @var $this PeriodontalBrushingController */
/* @var $model PeriodontalBrushing */

$this->breadcrumbs=array(
	'Periodontal Brushings'=>array('index'),
	$model->id_tbl_periodontal_brushing,
);

$this->menu=array(
	array('label'=>'List PeriodontalBrushing', 'url'=>array('index')),
	array('label'=>'Create PeriodontalBrushing', 'url'=>array('create')),
	array('label'=>'Update PeriodontalBrushing', 'url'=>array('update', 'id'=>$model->id_tbl_periodontal_brushing)),
	array('label'=>'Delete PeriodontalBrushing', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_periodontal_brushing),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PeriodontalBrushing', 'url'=>array('admin')),
);
?>

<h1>View PeriodontalBrushing #<?php echo $model->id_tbl_periodontal_brushing; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_periodontal_brushing',
		'id_tbl_periodontal_examination',
		'name_option_periodontal_brushing',
		'type_periodontal_brushing',
		'flag_option_periodontal_brushing',
		'observations_periodontal_brushing',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
