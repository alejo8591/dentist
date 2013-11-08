<?php
/* @var $this ProfessionController */
/* @var $model Profession */

$this->breadcrumbs=array(
	'Professions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Profesiones', 'url'=>array('index')),
	array('label'=>'Administrar Profesiones', 'url'=>array('admin')),
);
?>

<h1>Crear Profesión</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>