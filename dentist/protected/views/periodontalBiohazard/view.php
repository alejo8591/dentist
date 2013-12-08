<?php
/* @var $this PeriodontalBiohazardController */
/* @var $model PeriodontalBiohazard */

$this->breadcrumbs=array(
	'Periodontal Biohazards'=>array('index'),
	$model->id_tbl_periodontal_biohazard,
);

$this->menu=array(
	array('label'=>'List PeriodontalBiohazard', 'url'=>array('index')),
	array('label'=>'Create PeriodontalBiohazard', 'url'=>array('create')),
	array('label'=>'Update PeriodontalBiohazard', 'url'=>array('update', 'id'=>$model->id_tbl_periodontal_biohazard)),
	array('label'=>'Delete PeriodontalBiohazard', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_periodontal_biohazard),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PeriodontalBiohazard', 'url'=>array('admin')),
);
?>

<h1>View PeriodontalBiohazard #<?php echo $model->id_tbl_periodontal_biohazard; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_periodontal_biohazard',
		'id_tbl_dental_examination',
		'name_periodontal_biohazard',
		'flag_periodontal_biohazard',
		'observation_periodontal_biohazard',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
