<?php
/* @var $this OptionsObstetricGynecologyController */
/* @var $model OptionsObstetricGynecology */

$this->breadcrumbs=array(
	'Options Obstetric Gynecologies'=>array('index'),
	$model->id_tbl_option_obstetric_gynecology,
);

$this->menu=array(
	array('label'=>'List OptionsObstetricGynecology', 'url'=>array('index')),
	array('label'=>'Create OptionsObstetricGynecology', 'url'=>array('create')),
	array('label'=>'Update OptionsObstetricGynecology', 'url'=>array('update', 'id'=>$model->id_tbl_option_obstetric_gynecology)),
	array('label'=>'Delete OptionsObstetricGynecology', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_option_obstetric_gynecology),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionsObstetricGynecology', 'url'=>array('admin')),
);
?>

<h1>View OptionsObstetricGynecology #<?php echo $model->id_tbl_option_obstetric_gynecology; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_option_obstetric_gynecology',
		'id_tbl_personal_background',
		'name_option_obstetric_gynecology',
		'flag_option_option_obstetric_gynecology',
		'observation_option_obstetric_gynecology',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
