<?php
/* @var $this IntcpController */
/* @var $model Intcp */

$this->breadcrumbs=array(
	'Intcps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Intcp', 'url'=>array('index')),
	array('label'=>'Manage Intcp', 'url'=>array('admin')),
);
?>

<h1>Create Intcp</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>