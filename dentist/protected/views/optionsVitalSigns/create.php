<?php
/* @var $this OptionsVitalSignsController */
/* @var $model OptionsVitalSigns */

$this->breadcrumbs=array(
	'Options Vital Signs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionsVitalSigns', 'url'=>array('index')),
	array('label'=>'Manage OptionsVitalSigns', 'url'=>array('admin')),
);
?>

<h1>Create OptionsVitalSigns</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>