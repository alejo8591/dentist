<?php
/* @var $this OptionsOralHabitsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Options Oral Habits',
);

$this->menu=array(
	array('label'=>'Create OptionsOralHabits', 'url'=>array('create')),
	array('label'=>'Manage OptionsOralHabits', 'url'=>array('admin')),
);
?>

<h1>Options Oral Habits</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
