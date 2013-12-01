<?php
/* @var $this PeriodontalBrushingController */
/* @var $model PeriodontalBrushing */

$this->breadcrumbs=array(
	'Periodontal Brushings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PeriodontalBrushing', 'url'=>array('index')),
	array('label'=>'Manage PeriodontalBrushing', 'url'=>array('admin')),
);
?>

<h1>Create PeriodontalBrushing</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>