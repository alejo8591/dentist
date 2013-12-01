<?php
/* @var $this PeriodontalChartController */
/* @var $model PeriodontalChart */

$this->breadcrumbs=array(
	'Periodontal Charts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PeriodontalChart', 'url'=>array('index')),
	array('label'=>'Manage PeriodontalChart', 'url'=>array('admin')),
);
?>

<h1>Create PeriodontalChart</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>