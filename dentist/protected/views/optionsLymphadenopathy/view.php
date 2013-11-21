<?php
/* @var $this OptionsLymphadenopathyController */
/* @var $model OptionsLymphadenopathy */

$this->breadcrumbs=array(
	'Options Lymphadenopathies'=>array('index'),
	$model->id_tbl_option_lymphadenopathy,
);

$this->menu=array(
	array('label'=>'List OptionsLymphadenopathy', 'url'=>array('index')),
	array('label'=>'Create OptionsLymphadenopathy', 'url'=>array('create')),
	array('label'=>'Update OptionsLymphadenopathy', 'url'=>array('update', 'id'=>$model->id_tbl_option_lymphadenopathy)),
	array('label'=>'Delete OptionsLymphadenopathy', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_option_lymphadenopathy),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionsLymphadenopathy', 'url'=>array('admin')),
);
?>

<h1>View OptionsLymphadenopathy #<?php echo $model->id_tbl_option_lymphadenopathy; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_option_lymphadenopathy',
		'id_tbl_physical_examination',
		'name_option_lymphadenopathy',
		'flag_option_lymphadenopathy',
		'observation_option_lymphadenopathy',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
