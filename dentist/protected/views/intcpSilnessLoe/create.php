<?php
/* @var $this IntcpSilnessLoeController */
/* @var $model IntcpSilnessLoe */

$this->breadcrumbs=array(
	'Intcp Silness Loes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IntcpSilnessLoe', 'url'=>array('index')),
	array('label'=>'Manage IntcpSilnessLoe', 'url'=>array('admin')),
);
?>

<h1>Create IntcpSilnessLoe</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>