<?php
/* @var $this LevelSchoolingController */
/* @var $model LevelSchooling */

$this->breadcrumbs=array(
	'Level Schoolings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LevelSchooling', 'url'=>array('index')),
	array('label'=>'Manage LevelSchooling', 'url'=>array('admin')),
);
?>

<h1>Create LevelSchooling</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>