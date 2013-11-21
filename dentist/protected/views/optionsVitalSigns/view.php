<?php
/* @var $this OptionsVitalSignsController */
/* @var $model OptionsVitalSigns */

$this->breadcrumbs=array(
	'Options Vital Signs'=>array('index'),
	$model->id_tbl_option_vital_signs,
);

$this->menu=array(
	array('label'=>'List OptionsVitalSigns', 'url'=>array('index')),
	array('label'=>'Create OptionsVitalSigns', 'url'=>array('create')),
	array('label'=>'Update OptionsVitalSigns', 'url'=>array('update', 'id'=>$model->id_tbl_option_vital_signs)),
	array('label'=>'Delete OptionsVitalSigns', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_option_vital_signs),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionsVitalSigns', 'url'=>array('admin')),
);
?>

<h1>View OptionsVitalSigns #<?php echo $model->id_tbl_option_vital_signs; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_option_vital_signs',
		'id_tbl_physical_examination',
		'name_option_vital_signs',
		'flag_option_vital_signs',
		'observation_option_vital_signs',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
