<?php
/* @var $this OptionsAtmController */
/* @var $model OptionsAtm */

$this->breadcrumbs=array(
	'Options Atms'=>array('index'),
	$model->id_tbl_option_atm,
);

$this->menu=array(
	array('label'=>'List OptionsAtm', 'url'=>array('index')),
	array('label'=>'Create OptionsAtm', 'url'=>array('create')),
	array('label'=>'Update OptionsAtm', 'url'=>array('update', 'id'=>$model->id_tbl_option_atm)),
	array('label'=>'Delete OptionsAtm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_option_atm),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionsAtm', 'url'=>array('admin')),
);
?>

<h1>View OptionsAtm #<?php echo $model->id_tbl_option_atm; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_option_atm',
		'id_tbl_atm',
		'name_option_atm',
		'flag_option_atm',
		'observation_atm',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
