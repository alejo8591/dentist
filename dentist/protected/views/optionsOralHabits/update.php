<?php
/* @var $this OptionsOralHabitsController */
/* @var $model OptionsOralHabits */

$this->breadcrumbs=array(
	'Options Oral Habits'=>array('index'),
	$model->id_tbl_option_oral_habits=>array('view','id'=>$model->id_tbl_option_oral_habits),
	'Update',
);

$this->menu=array(
	array('label'=>'List OptionsOralHabits', 'url'=>array('index')),
	array('label'=>'Create OptionsOralHabits', 'url'=>array('create')),
	array('label'=>'View OptionsOralHabits', 'url'=>array('view', 'id'=>$model->id_tbl_option_oral_habits)),
	array('label'=>'Manage OptionsOralHabits', 'url'=>array('admin')),
);
?>

<h1>Update OptionsOralHabits <?php echo $model->id_tbl_option_oral_habits; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>