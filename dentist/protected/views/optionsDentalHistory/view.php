<?php
/* @var $this OptionsDentalHistoryController */
/* @var $model OptionsDentalHistory */

$this->breadcrumbs=array(
	'Options Dental Histories'=>array('index'),
	$model->id_tbl_option_dental_history,
);

$this->menu=array(
	array('label'=>'List OptionsDentalHistory', 'url'=>array('index')),
	array('label'=>'Create OptionsDentalHistory', 'url'=>array('create')),
	array('label'=>'Update OptionsDentalHistory', 'url'=>array('update', 'id'=>$model->id_tbl_option_dental_history)),
	array('label'=>'Delete OptionsDentalHistory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_option_dental_history),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionsDentalHistory', 'url'=>array('admin')),
);
?>

<h1>View OptionsDentalHistory #<?php echo $model->id_tbl_option_dental_history; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_option_dental_history',
		'id_tbl_personal_background',
		'name_option_dental_history',
		'flag_option_dental_history',
		'observation_option_dental_history',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
