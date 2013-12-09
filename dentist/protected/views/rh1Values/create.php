<?php
/* @var $this Rh1ValuesController */
/* @var $model Rh1Values */

$this->breadcrumbs=array(
	'Rh1 Values'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rh1Values', 'url'=>array('index')),
	array('label'=>'Manage Rh1Values', 'url'=>array('admin')),
);
?>

<h1>Create Rh1Values</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>