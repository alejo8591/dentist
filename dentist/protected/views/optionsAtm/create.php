<?php
/* @var $this OptionsAtmController */
/* @var $model OptionsAtm */

$this->breadcrumbs=array(
	'Options Atms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OptionsAtm', 'url'=>array('index')),
	array('label'=>'Manage OptionsAtm', 'url'=>array('admin')),
);
?>

<h1>Create OptionsAtm</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>