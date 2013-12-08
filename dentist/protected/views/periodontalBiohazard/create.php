<?php
/* @var $this PeriodontalBiohazardController */
/* @var $model PeriodontalBiohazard */

$this->breadcrumbs=array(
	'Periodontal Biohazards'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PeriodontalBiohazard', 'url'=>array('index')),
	array('label'=>'Manage PeriodontalBiohazard', 'url'=>array('admin')),
);
?>

<h1>Create PeriodontalBiohazard</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>