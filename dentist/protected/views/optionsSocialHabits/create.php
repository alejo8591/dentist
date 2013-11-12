<?php
/* @var $this OptionsSocialHabitsController */
/* @var $model OptionsSocialHabits */

$this->breadcrumbs=array(
	'Options Social Habits'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionsSocialHabits', 'url'=>array('index')),
	array('label'=>'Manage OptionsSocialHabits', 'url'=>array('admin')),
);
?>

<h1>Create OptionsSocialHabits</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>