<?php
/* @var $this OptionsOralHabitsController */
/* @var $model OptionsOralHabits */

$this->breadcrumbs=array(
	'Options Oral Habits'=>array('index'),
	$model->id_tbl_option_oral_habits,
);

$this->menu=array(
	array('label'=>'List OptionsOralHabits', 'url'=>array('index')),
	array('label'=>'Create OptionsOralHabits', 'url'=>array('create')),
	array('label'=>'Update OptionsOralHabits', 'url'=>array('update', 'id'=>$model->id_tbl_option_oral_habits)),
	array('label'=>'Delete OptionsOralHabits', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_tbl_option_oral_habits),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OptionsOralHabits', 'url'=>array('admin')),
);
?>

<h1>View OptionsOralHabits #<?php echo $model->id_tbl_option_oral_habits; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_tbl_option_oral_habits',
		'id_tbl_personal_background',
		'name_option_oral_habits',
		'flag_option_oral_habits',
		'observation_option_oral_habits',
		'create_user_id',
		'create_time',
		'update_user_id',
		'update_time',
	),
)); ?>
