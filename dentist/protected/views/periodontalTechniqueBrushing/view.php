<?php
/* @var $this PeriodontalTechniqueBrushingController */
/* @var $model PeriodontalTechniqueBrushing */

$this->breadcrumbs=array(
	'Periodontal Technique Brushings'=>array('index'),
	$model->id_tbl_periodontal_technique_brushing,
);

$this->menu=array(
	array('label'=>'List PeriodontalTechniqueBrushing', 'url'=>array('index')),
	array('label'=>'Create PeriodontalTechniqueBrushing', 'url'=>array('create')),
	array('label'=>'Update PeriodontalTechniqueBrushing', 'url'=>array('update', 'id'=>$model->id_tbl_periodontal_technique_brushing)),
	array('label'=>'Delete PeriodontalTechniqueBrushing', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_periodontal_technique_brushing),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PeriodontalTechniqueBrushing', 'url'=>array('admin')),
);
?>

<h1>View PeriodontalTechniqueBrushing #<?php echo $model->id_tbl_periodontal_technique_brushing; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_periodontal_technique_brushing',
		'id_tbl_periodontal_examination',
		'name_option_periodontal_technique_brushing',
		'flag_option_periodontal_technique_brushing',
		'observations_periodontal_technique_brushing',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
