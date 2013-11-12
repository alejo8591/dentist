<?php
/* @var $this OptionsSocialHabitsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Options Social Habits',
);

$this->menu=array(
	array('label'=>'Create OptionsSocialHabits', 'url'=>array('create')),
	array('label'=>'Manage OptionsSocialHabits', 'url'=>array('admin')),
);
?>

<h1>Options Social Habits</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
