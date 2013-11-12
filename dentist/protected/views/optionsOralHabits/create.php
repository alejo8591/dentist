<?php
/* @var $this OptionsOralHabitsController */
/* @var $model OptionsOralHabits */

$this->breadcrumbs=array(
	'Options Oral Habits'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionsOralHabits', 'url'=>array('index')),
	array('label'=>'Manage OptionsOralHabits', 'url'=>array('admin')),
);
?>

<h1>Create OptionsOralHabits</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>