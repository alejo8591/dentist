<?php
/* @var $this PeriodontalTechniqueBrushingController */
/* @var $model PeriodontalTechniqueBrushing */

$this->breadcrumbs=array(
	'Periodontal Technique Brushings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PeriodontalTechniqueBrushing', 'url'=>array('index')),
	array('label'=>'Manage PeriodontalTechniqueBrushing', 'url'=>array('admin')),
);
?>

<h1>Create PeriodontalTechniqueBrushing</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>