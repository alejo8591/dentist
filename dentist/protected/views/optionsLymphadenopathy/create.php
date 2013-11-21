<?php
/* @var $this OptionsLymphadenopathyController */
/* @var $model OptionsLymphadenopathy */

$this->breadcrumbs=array(
	'Options Lymphadenopathies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionsLymphadenopathy', 'url'=>array('index')),
	array('label'=>'Manage OptionsLymphadenopathy', 'url'=>array('admin')),
);
?>

<h1>Create OptionsLymphadenopathy</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>