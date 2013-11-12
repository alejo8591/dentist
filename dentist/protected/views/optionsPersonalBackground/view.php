<?php
/* @var $this OptionsPersonalBackgroundController */
/* @var $model OptionsPersonalBackground */

$this->breadcrumbs=array(
	'Options Personal Backgrounds'=>array('index'),
	$model->id_tbl_option_personal_background,
);

$this->menu=array(
	array('label'=>'List OptionsPersonalBackground', 'url'=>array('index')),
	array('label'=>'Create OptionsPersonalBackground', 'url'=>array('create')),
	array('label'=>'Update OptionsPersonalBackground', 'url'=>array('update', 'id'=>$model->id_tbl_option_personal_background)),
	array('label'=>'Delete OptionsPersonalBackground', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_option_personal_background),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionsPersonalBackground', 'url'=>array('admin')),
);
?>

<h1>View OptionsPersonalBackground #<?php echo $model->id_tbl_option_personal_background; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_option_personal_background',
		'id_tbl_personal_background',
		'name_option_personal_background',
		'flag_option_personal_background',
		'observation_option_personal_background',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
