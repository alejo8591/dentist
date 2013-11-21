<?php
/* @var $this OptionsNeckController */
/* @var $model OptionsNeck */

$this->breadcrumbs=array(
	'Options Necks'=>array('index'),
	$model->id_tbl_option_neck,
);

$this->menu=array(
	array('label'=>'List OptionsNeck', 'url'=>array('index')),
	array('label'=>'Create OptionsNeck', 'url'=>array('create')),
	array('label'=>'Update OptionsNeck', 'url'=>array('update', 'id'=>$model->id_tbl_option_neck)),
	array('label'=>'Delete OptionsNeck', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_option_neck),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionsNeck', 'url'=>array('admin')),
);
?>

<h1>View OptionsNeck #<?php echo $model->id_tbl_option_neck; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_option_neck',
		'id_tbl_physical_examination',
		'name_option_neck',
		'flag_option_neck',
		'observation_option_neck',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
