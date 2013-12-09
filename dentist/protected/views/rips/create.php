<?php
/* @var $this RipsController */
/* @var $model Rips */

$this->breadcrumbs=array(
	'Rips'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rips', 'url'=>array('index')),
	array('label'=>'Manage Rips', 'url'=>array('admin')),
);
?>

<h1>Create Rips</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>