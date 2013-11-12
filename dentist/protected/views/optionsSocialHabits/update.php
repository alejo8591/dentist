<?php
/* @var $this OptionsSocialHabitsController */
/* @var $model OptionsSocialHabits */

$this->breadcrumbs=array(
	'Options Social Habits'=>array('index'),
	$model->id_tbl_option_social_habits=>array('view','id'=>$model->id_tbl_option_social_habits),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionsSocialHabits', 'url'=>array('index')),
	array('label'=>'Create OptionsSocialHabits', 'url'=>array('create')),
	array('label'=>'View OptionsSocialHabits', 'url'=>array('view', 'id'=>$model->id_tbl_option_social_habits)),
	array('label'=>'Manage OptionsSocialHabits', 'url'=>array('admin')),
);
?>

<h1>Update OptionsSocialHabits <?php echo $model->id_tbl_option_social_habits; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>