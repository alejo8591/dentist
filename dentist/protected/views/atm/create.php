<?php
/* @var $this AtmController */
/* @var $model Atm */

$this->breadcrumbs=array(
	'Atms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Atm', 'url'=>array('index')),
	array('label'=>'Manage Atm', 'url'=>array('admin')),
);
?>

<h1>Create Atm</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>