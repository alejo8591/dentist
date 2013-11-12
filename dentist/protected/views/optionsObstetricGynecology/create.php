<?php
/* @var $this OptionsObstetricGynecologyController */
/* @var $model OptionsObstetricGynecology */

$this->breadcrumbs=array(
	'Options Obstetric Gynecologies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionsObstetricGynecology', 'url'=>array('index')),
	array('label'=>'Manage OptionsObstetricGynecology', 'url'=>array('admin')),
);
?>

<h1>Create OptionsObstetricGynecology</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>