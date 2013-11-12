<?php
/* @var $this OptionsSocialHabitsController */
/* @var $model OptionsSocialHabits */

$this->breadcrumbs=array(
	'Options Social Habits'=>array('index'),
	$model->id_tbl_option_social_habits,
);

$this->menu=array(
	array('label'=>'List OptionsSocialHabits', 'url'=>array('index')),
	array('label'=>'Create OptionsSocialHabits', 'url'=>array('create')),
	array('label'=>'Update OptionsSocialHabits', 'url'=>array('update', 'id'=>$model->id_tbl_option_social_habits)),
	array('label'=>'Delete OptionsSocialHabits', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_option_social_habits),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionsSocialHabits', 'url'=>array('admin')),
);
?>

<h1>View OptionsSocialHabits #<?php echo $model->id_tbl_option_social_habits; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_option_social_habits',
		'id_tbl_personal_background',
		'name_option_social_habits',
		'flag_option_social_habits',
		'observation_option_social_habits',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
